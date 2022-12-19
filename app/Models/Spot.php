<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "coordinates",
        "image",
        "category_id"
    ];

    public function getCategory(){
        return SpotCategory::find($this->category_id);

    }

    public function category(){
        return $this->belongsTo(SpotCategory::class);
    }

    public function routes(){
        return $this->belongsToMany(Route::class, 'route_spots', 'spot_id', 'route_id');
    }
}
