<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        "places_live_id",
        "name",
        "description",
        "num_seats",
        "images",
        "price",
    ];

    public function getPlace(){
        return PlacesLive::find($this->places_live_id);

    }

    public function place(){
        return $this->belongsTo(PlacesLive::class);
    }

    public function dates(){
        return $this->hasMany(ReserveDate::class, 'room_id');
    }

}

