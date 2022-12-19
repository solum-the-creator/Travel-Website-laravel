<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacesLive extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "address",
        "price",
        "coordinates",
        "images",
        "categories_id",
        "base_place_id",
    ];

    public function getCategory(){
        return CategoriesPlace::find($this->categories_id);

    }

    public function category(){
        return $this->belongsTo(CategoriesPlace::class);
    }

    public function getBase(){
        return BasePlace::find($this->base_place_id);

    }

    public function base(){
        return $this->belongsTo(BasePlace::class);
    }

    public function rooms(){
        return $this->hasMany(PlaceRoom::class);
    }

    public function dates(){
        return $this->hasMany(ReserveDate::class, 'place_id');
    }




}
