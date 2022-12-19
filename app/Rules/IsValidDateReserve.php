<?php

namespace App\Rules;

use App\Models\ReservationPlace;
use Illuminate\Contracts\Validation\Rule;

class IsValidDateReserve implements Rule
{
    protected $house;
    protected $room;
    protected $type;
    protected $end_date;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($houseId,$end_date, $typeId=2, $roomId = null)
    {
        $this->house =  $houseId;
        $this->room =  $roomId;

        $this->type =  $typeId;
        //
        $this->end_date = $end_date;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {


        if($this->type == 2){
            $reserves = ReservationPlace::where('place_id', $this->house)->get();
            foreach ($reserves as $reserve){
                $start_date = strtotime($reserve->arrival_date);
                $end_date = strtotime($reserve->departure_date);
                $inRange = (strtotime($value) >= $start_date && strtotime($value) <= $end_date)? true : false;
                $offer_start = strtotime($value);
                $offer_end = strtotime($this->end_date);
                if($inRange == true){
                    return false;
                }
                if($offer_start<$end_date && $offer_end > $start_date){
                    return false;
                }
            }
        }
        if($this->type == 1){
            $reserves = ReservationPlace::where('place_id', $this->house)->where('room_id',$this->room)->get();
            foreach ($reserves as $reserve){
                $start_date = strtotime($reserve->arrival_date);
                $end_date = strtotime($reserve->departure_date);
                $inRange = (strtotime($value) >= $start_date && strtotime($value) <= $end_date)? true : false;
                $offer_start = strtotime($value);
                $offer_end = strtotime($this->end_date);
                if($inRange == true){
                    return false;
                }
                if($offer_start<$end_date && $offer_end > $start_date){
                    return false;
                }
            }
        }

        return true;



    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Неккорректная дата';
    }
}
