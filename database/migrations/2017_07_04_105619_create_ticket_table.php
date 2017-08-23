<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->char('seat_id', 10)->nullable();
            $table->string('flight_detail')->nullable();
            $table->string('passenger')->nullable();
            $table->integer('active')->nullable();
            $table->string('payment_method')->nullable();
            $table->char('status', 10)->nullable();

            
            $table->string('currency')->default('vnd');
            $table->string('convert')->default('vnd');

            $table->char('start_place', 5)->nullable();
            $table->char('end_place', 5)->nullable();
            $table->integer('mode')->nullable();

            $table->bigInteger('price_adult')->nullable();
            $table->bigInteger('price_children')->nullable();
            $table->bigInteger('price_baby')->nullable();

            $table->integer('count_adult')->nullable();
            $table->integer('count_children')->nullable();
            $table->integer('count_baby')->nullable();

            $table->bigInteger('service_adult')->nullable();
            $table->bigInteger('service_children')->nullable();
            $table->bigInteger('service_baby')->nullable();

            $table->bigInteger('price_all')->nullable();
            $table->bigInteger('gift')->nullable();
            $table->bigInteger('total')->nullable();
            $table->bigInteger('paid')->nullable();

            $table->char('contact_sex', 10)->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('ship_address')->nullable();

            $table->boolean('is_bill')->nullable();
            $table->string('bill_company_name')->nullable();
            $table->string('bill_tax_number')->nullable();
            $table->string('bill_address')->nullable();
            $table->string('bill_city')->nullable();
            $table->string('bill_address_receive')->nullable();

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
         Schema::dropIfExists('ticket');
    }
}
