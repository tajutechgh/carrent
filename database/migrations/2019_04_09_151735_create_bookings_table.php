<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departure_dateTime');
            $table->string('departure_pickup_location');
            $table->string('departure_dropOff_location');
            $table->string('return_dateTime')->nullable();
            $table->string('return_pickup_location')->nullable();
            $table->string('return_dropOff_location')->nullable();
            $table->string('quantity');
            $table->string('phone');
            $table->string('status');
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
        Schema::dropIfExists('bookings');
    }
}
