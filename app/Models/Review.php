<?php

namespace App\Models;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'base_place_id',
        'review_text',
        'mark',
    ];

    public function getUser(){
        return User::find($this->user_id);

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getBasePlace(){
        return BasePlace::find($this->base_place_id);

    }

    public function basePlace(){
        return $this->belongsTo(BasePlace::class);
    }

    public function getPercentMark(){
        $percent = 20*$this->mark;
        return $percent;

    }


}
