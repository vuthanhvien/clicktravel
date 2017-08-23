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
            $table->char('sex', 7)->nullable();
            $table->char('first_name', 30)->nullable();
            $table->char('last_name', 30)->nullable();
            $table->string('address')->nullable();
            $table->char('birthday', 15)->nullable();
            $table->string('email')->nullable();
            $table->char('phone', 20)->nullable();
            $table->char('age', 10)->nullable();
            $table->char('type', 10)->nullable();
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
