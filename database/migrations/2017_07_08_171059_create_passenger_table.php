<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passenger', function (Blueprint $table) {
            $table->increments('id');
            $table->char('sex', 7);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->date('birthday');
            $table->string('email');
            $table->string('phone');
            $table->char('age', 10);
            $table->char('type', 10);
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
         Schema::dropIfExists('passenger');
    }
}
