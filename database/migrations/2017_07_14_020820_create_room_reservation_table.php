<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->datetime('reservation_start_at');
            $table->datetime('reservation_end_at');
            $table->integer('reserved_for_user_id')->unsigned();
            $table->foreign('reserved_for_user_id')->references('id')->on('users');
//            $table->datetime('created_at');
//            $table->datetime('updated_at');
            $table->integer('updated_by_user_id')->unsigned();
            $table->foreign('updated_by_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservations');
    }
}
