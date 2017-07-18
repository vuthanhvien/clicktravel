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
            $table->string('flight_id');
            $table->string('start_place');
            $table->string('end_place');
            $table->char('start_date', 15);
            $table->char('end_date', 15);
            $table->char('start_time', 7);
            $table->char('end_time', 7);
            $table->string('price');
            $table->char('currency', 10)->default('vnd');
            $table->string('brand');
            $table->char('type', 5);
            $table->integer('turn')->default(1);
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
