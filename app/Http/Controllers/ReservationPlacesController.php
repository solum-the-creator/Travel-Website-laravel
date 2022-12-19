<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreReservationRequest;
use App\Http\Requests\ReservationRequest;
use App\Models\BasePlace;
use App\Models\PlaceRoom;
use App\Models\PlacesLive;
use App\Models\ReservationPlace;
use App\Models\ReserveDate;
use App\Rules\IsValidDateReserve;
use Carbon\Carbon;
use Carbon\Traits\Creator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class ReservationPlacesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param PreReservationRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function showReservationForm(PreReservationRequest $request)
    {
        if(!isset($request->type))
        {
            $request->type = 2;
        }



        $preReserv = $request->validated();
        $preReserv['type'] = $request->type;
        session(['preReservation' => $preReserv]);
        $currentHouse = PlacesLive::find($preReserv['house']);
        session(['currentHouse' => $currentHouse]);
        $currentBase = $currentHouse->getBase();
        session(['currentBase' => $currentBase]);

        $start_date = new Carbon($preReserv['start_date']);
        $end_date = new Carbon($preReserv['end_date']);
        $count_day = 0;
        while ($start_date->lte($end_date)) {

            $all_dates[] = $start_date->toDateString();
            $start_date->addDay();
            $count_day++;
        }

        $full_price = $currentHouse->price * $count_day;


        if ($preReserv['type'] == 1) {
            $currentRoom = PlaceRoom::find($preReserv['rooms']);
            session(['currentRoom' => $currentRoom]);
            $full_price = $currentRoom->price * $count_day;


        }
        session(['fullPrice' => $full_price]);
        return redirect(route('reservation'));

    }

    public function showReserv()
    {

        return view('reservation');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ReservationRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function createReservation(ReservationRequest $request)
    {
        $reservationData = $request->validated();
        if (Auth::check()) {
            $reservationData['user_id'] = Auth::id();
        }
        $preReservDate = session()->pull('preReservation');
        $start_date = new Carbon($preReservDate['start_date']);
        $end_date = new Carbon($preReservDate['end_date']);
        $all_dates = array();
        $reserve_date['place_id'] = session('currentHouse')->id;
        while ($start_date->lte($end_date)) {
            $all_dates[] = $start_date->toDateString();
            if ($preReservDate['type'] == 2) {
                $date_rooms = session('currentHouse')->rooms;
                foreach ($date_rooms as $room) {
                    $reserve_date['room_id'] = $room->id;
                    $reserve_date['reserve_date'] = $start_date;
                    $date_reserve = ReserveDate::create($reserve_date);
                }
            } else {
                $reserve_date['room_id'] = session('currentRoom')->id;
                $reserve_date['reserve_date'] = $start_date;
                $date_reserve = ReserveDate::create($reserve_date);
            }
            $start_date->addDay();
        }
        $reservationData['booking_type_id'] = $preReservDate['type'];
        $reservationData['number_guest'] = $preReservDate['quantity'];
        $reservationData['arrival_date'] = $preReservDate['start_date'];
        $reservationData['departure_date'] = $preReservDate['end_date'];
        $reservationData['base_place_id'] = session()->pull('currentBase')->id;
        $reservationData['place_id'] = session()->pull('currentHouse')->id;
        if ($preReservDate['type'] != 2) {
            $reservationData['room_id'] = session()->pull('currentRoom')->id;
        }
        $reservationData['final_price'] = session()->pull('fullPrice');
        $reservationData['reservation_date'] = Carbon::now()->toDateTimeString();
        $reservationPlace = ReservationPlace::create($reservationData);
        return redirect()->route('thanks_reservation', ['id' => $reservationPlace->id]);
    }

    public function showThanksReservation($id)
    {


        $reservation = ReservationPlace::find($id);

        return view('success_reservation', ['reservation' => $reservation]);
    }

    public function send(){
        return view('mail');
        /*Mail::send(['text'=>'mail'],['name', 'Order Info'], function ($message){
            $message->to('skostukevi@gmail.com','To skostukevi')->subject('Test email');
            $message->from('skostukevi@gmail.com','S kostukevi');
        });*/
    }

}
