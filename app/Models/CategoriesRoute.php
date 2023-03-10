<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesRoute extends Model
{
    use HasFactory;

    public function routes(){
        return $this->hasMany(Route::class);
    }

}
