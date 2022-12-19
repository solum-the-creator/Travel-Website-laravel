<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationPlace extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "booking_type_id",
        "base_place_id",
        "place_id",
        "room_id",
        "arrival_date",
        "departure_date",
        "phone",
        "number_guest",
        "second_name",
        "first_name",
        "birthday_date",
        "gender",
        "email",
        "comment_order",
        "final_price",
        "booking_status_id",
        "update_status_date",
        "payment_method_id",
        "reservation_date",
    ];

    public $timestamps = false;

    public function getUser()
    {
        return User::find($this->user_id);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getBasePlace()
    {
        return BasePlace::find($this->base_place_id);
    }

    public function basePlace()
    {
        return $this->belongsTo(BasePlace::class);
    }

    public function getPlace()
    {
        return PlacesLive::find($this->place_id);

    }

    public function place()
    {
        return $this->belongsTo(PlacesLive::class);
    }

    public function getRoom()
    {
        return PlaceRoom::find($this->room_id);

    }

    public function room()
    {
        return $this->belongsTo(PlaceRoom::class);
    }

    public function getBookingStatus()
    {
        return BookingStatus::find($this->booking_status_id);

    }

    public function bookingStatus()
    {
        return $this->belongsTo(BookingStatus::class);
    }





    public function getPaymentMethod()
    {
        return PaymentMethod::find($this->payment_method_id);

    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

}
