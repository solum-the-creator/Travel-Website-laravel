<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasePlace extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "address",
        "coordinates",
        "images",
        "cover_image",
    ];

    public function places(){
        return $this->hasMany(PlacesLive::class);
    }

    public function minPrice(){

        $prices = [];

        foreach ($this->places as $place){
            $min_price = $place->price;

            array_push($prices, $min_price);

        }

        return min($prices);
    }

    public function sortMinPrice(){

        $prices = [];

        foreach ($this->places as $place){
            $min_price = $place->price;

            array_push($prices, $min_price);

        }

        return min($prices);
    }





    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function getAverageMark(){

        $avgMark = $this->reviews()->avg('mark');

        return round($avgMark,1);

    }

}
