<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_places', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->foreignId('booking_type_id')->constrained('booking_types');
            $table->foreignId('base_place_id')->constrained('base_places');
            $table->foreignId('place_id')->constrained('places_lives')->nullable();
            $table->foreignId('room_id')->constrained('place_rooms')->nullable();

            $table->date('arrival_date');
            $table->date('departure_date');
            $table->string('phone');
            $table->integer('number_guest');
            $table->string('second_name');
            $table->string('first_name');
            $table->date('birthday_date');
            $table->string('gender');
            $table->string('email');
            $table->string('comment_order');
            $table->integer('final_price');

            $table->foreignId('booking_status_id')->constrained('booking_statuses');
            $table->dateTime('update_status_date')->nullable();

            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->dateTime('reservation_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_places');
    }
}
