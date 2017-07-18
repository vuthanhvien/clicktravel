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
            $table->string('transition_id');
            $table->string('seat_id');
            $table->string('flight_detail');
            $table->string('passenger');
            $table->integer('active');
            $table->string('payment_method');
            $table->char('status', 10);
            $table->string('currency')->default('vnd');

            $table->string('price_one');
            $table->string('price_all');
            $table->string('price_service');
            $table->string('gift');
            $table->string('total');
            $table->string('pay_all');

            $table->char('contact_sex', 10);
            $table->string('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('contact_name');
            $table->string('ship_address');

            $table->boolean('is_bill');
            $table->string('bill_company_name');
            $table->string('bill_tax_number');
            $table->string('bill_address');
            $table->string('bill_city');
            $table->string('bill_address_receive');

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
