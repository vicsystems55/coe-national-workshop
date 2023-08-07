<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('fname');
            $table->string('middlename');
            $table->string('phone');
            $table->string('email');
            $table->string('institutionname');
            $table->string('address');
            $table->string('currentposition');
            $table->string('gender');
            $table->string('reservation_code');

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
        Schema::dropIfExists('event_bookings');
    }
}
