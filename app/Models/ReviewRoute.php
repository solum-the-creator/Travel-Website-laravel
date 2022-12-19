<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'route_id',
        'review_text',
        'mark',
    ];

    public function getUser(){
        return User::find($this->user_id);

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRoute(){
        return Route::find($this->route_id);

    }

    public function route(){
        return $this->belongsTo(Route::class);
    }

    public function getPercentMark(){
        $percent = 20*$this->mark;
        return $percent;
    }
}
