<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('places_id')->constrained('places_lives');
            $table->foreignId('rooms_id')->constrained('rooms');
            $table->integer('is_available')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places_rooms');
    }
}
