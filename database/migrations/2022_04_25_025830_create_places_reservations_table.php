<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('places_rooms_id')->constrained('places_rooms')->nulluble();
            $table->foreignId('places_live_id')->constrained('places_lives');
            $table->date('start_reservations');
            $table->date('end_reservations');
            $table->integer('number_residents');
            $table->string('status_reservations');
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
        Schema::dropIfExists('places_reservations');
    }
}
