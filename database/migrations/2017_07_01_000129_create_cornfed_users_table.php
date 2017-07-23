<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCornfedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cornfedusers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 50)->unique();
            $table->string('password', 255)->nullable();
            $table->string('phone', 12);
            $table->enum('role', ['vst', 'mbr', 'adm']);
            $table->date('effective_dt');
            $table->date('termination_dt')->nullable();
            $table->integer('updated_by_user_id')->unsigned();
            $table->rememberToken();
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
        //

        Schema::dropIfExists('cornfedusers');
    }
}
