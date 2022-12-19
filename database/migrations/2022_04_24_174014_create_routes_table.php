<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {

            $table->id();

            $table->foreignId('categories_id')->constrained('categories_routes');

            $table->string('name');
            $table->text('description');
            $table->text('route_name_points');
            $table->string('images', 1000)->nullable();
            $table->string('start_point');
            $table->string('end_point');
            $table->string('points');
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('routes');
    }
}
