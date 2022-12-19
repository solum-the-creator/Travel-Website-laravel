<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_id',
        'room_id',
        'reserve_date',
        'status',
    ];

    public function getPlace(){
        return PlacesLive::find($this->place_id);

    }

    public function place(){
        return $this->belongsTo(PlacesLive::class);
    }

    public function getRoom(){
        return PlaceRoom::find($this->room_id);
    }

    public function room(){
        return $this->belongsTo(PlaceRoom::class);
    }



}
