<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flight_id')->nullable();
            $table->char('start_place', 5)->nullable();
            $table->char('end_place', 5)->nullable();
            $table->char('start_time', 20)->nullable();
            $table->char('end_time', 20)->nullable();
            $table->char('currency', 10)->default('vnd');
            $table->char('brand', 5)->nullable();
            $table->char('type', 5)->nullable();
            $table->text('turn')->nullable();
            $table->integer('stop_num')->nullable();
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
         Schema::dropIfExists('flight');
    }
}
