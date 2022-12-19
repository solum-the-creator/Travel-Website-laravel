<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained('places_lives');
            $table->foreignId('room_id')->constrained('place_rooms');
            $table->date('reserve_date');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_dates');
    }
}
