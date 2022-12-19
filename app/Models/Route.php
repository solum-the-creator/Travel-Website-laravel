<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "description",
        "route_name_points",
        "price",
        "start_point",
        "end_point",
        "points",
        "images",
        "categories_id"
    ];

    public function getCategory(){
        return CategoriesRoute::find($this->categories_id);

    }

    public function category(){
        return $this->belongsTo(CategoriesRoute::class);
    }

    public function spots(){
        return $this->belongsToMany(Spot::class, 'route_spots', 'route_id', 'spot_id');
    }

    public function reviewRoutes(){
        return $this->hasMany(ReviewRoute::class);
    }

    public function getAverageMark(){

        $avgMark = $this->reviewRoutes()->avg('mark');

        return round($avgMark,1);

    }
}
