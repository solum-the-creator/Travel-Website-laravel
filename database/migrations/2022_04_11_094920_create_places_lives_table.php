<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_lives', function (Blueprint $table) {
            $table->id();

            $table->foreignId('categories_id')->constrained('categories_places');

            $table->string('name');
            $table->text('description');
            $table->string('images', 1000);
            $table->string('address');
            $table->string('coordinates');
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
        Schema::dropIfExists('places_lives');
    }
}
