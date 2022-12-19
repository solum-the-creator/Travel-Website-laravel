<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_rooms', function (Blueprint $table) {
            $table->id();

            $table->foreignId('places_live_id')->constrained('places_lives');

            $table->string('name');
            $table->text('description');
            $table->integer('num_seats');
            $table->string('images', 1000);
            $table->integer('price');

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
        Schema::dropIfExists('place_rooms');
    }
}
