<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_register', function (Blueprint $table) {
            $table->increments('id');
            $table->char('last_name', 30)->nullable();
            $table->char('first_name', 30)->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->char('status', 15)->nullable();
            $table->char('phone', 30)->nullable();
            $table->text('memo')->nullable();
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
         Schema::dropIfExists('agency_register');
        //
    }
}
