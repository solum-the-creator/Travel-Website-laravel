<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesPlace extends Model
{
    use HasFactory;

    public function places(){
        return $this->hasMany(PlacesLive::class);
    }
}
