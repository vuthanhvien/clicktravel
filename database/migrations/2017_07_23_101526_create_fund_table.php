<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->bigInteger('value')->nullable();
            $table->integer('add_id')->nullable();
            $table->integer('user_id')->nullable();

            $table->integer('ticket_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *s
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fund');
    }
}
