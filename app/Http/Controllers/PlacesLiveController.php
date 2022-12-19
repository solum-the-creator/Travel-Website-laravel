<?php

namespace App\Http\Controllers;

use App\Models\BasePlace;
use App\Models\PlaceRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\PlacesLive;

class PlacesLiveController extends Controller
{

    public function allPlaces()
    {
        $places = new PlacesLive();
        return view('tourism', ['places' => $places->all()]);
    }

    public function allBasePlaces()
    {

        $places = new BasePlace();

        return view('base_places', ['places' => $places->all()]);

    }


    public function showSinglePlace($id)
    {
        $places = PlacesLive::take(4)->get();
        $place = new PlacesLive();
        $current_place = $place->find($id);



        $base_houses = $current_place->getBase()->places;
        if ($current_place->booking_types_id == 2 || $current_place->booking_types_id == 3) {
            $rooms = $place->find($id)->rooms;
            return view('single', ['place' => $place->find($id), 'places' => $places, 'rooms' => $rooms, 'houses_live' => $base_houses,]);
        }
        return view('single', ['place' => $place->find($id), 'places' => $places, 'houses_live' => $base_houses,]);
    }

    public function showSingleBasePlace($id)
    {

        $places = BasePlace::all();
        $place = new BasePlace();
        $place_lives = $place->find($id)->places;




        $reviews = $place->find($id)->reviews;
        return view('single_base_place', ['place' => $place->find($id), 'places' => $places, 'houses_live' => $place_lives, 'reviews' => $reviews,]);
    }

    public function getRoomsForm(Request $request)
    {
        $place = new PlacesLive();
        $rooms = $place->find($request->house)->rooms;
        return response()->json(['rooms' => $rooms]);
    }

    public function getDateHouseForm(Request  $request)
    {

        $place = new PlacesLive();
        $dates = $place->find($request->house)->dates;
        $numGuest = $place->find($request->house)->num_seats;
        return response()->json(['dates' => $dates, 'numberGuest' => $numGuest]);
    }

    public function getDateRoomForm(Request  $request)
    {

        $place = new PlacesLive();
        $room = new PlaceRoom();
        $dates = $room->find($request->room)->dates;
        $numGuest = $room->find($request->room)->num_seats;
        return response()->json(['dates' => $dates,'numberGuest' => $numGuest]);
    }

    public function sortBasePlace(Request $request){
        $places = new BasePlace();
        if($request->sortBy == 'name'){
            $sort_places = $places->orderBy('name','asc')->get();
        }
        else if($request->sortBy == 'date'){
            $sort_places = $places->latest()->get();
        }
        else if($request->sortBy == 'rating'){
            $sort_places = BasePlace::withAvg('reviews','mark')->orderBy('reviews_avg_mark', 'desc')->get();
        }
        else if($request->sortBy == 'price'){
            $sort_places = BasePlace::withMin('places','price')->orderBy('places_min_price', 'asc')->get();
        }




        foreach ($sort_places as $place) {
            $place->count_review = $place->reviews->count();
            $place->min_price = $place->minPrice();
            $place->avg_mark = $place->getAverageMark();
        }
        return response()->json(['places' => $sort_places,]);
    }

}
