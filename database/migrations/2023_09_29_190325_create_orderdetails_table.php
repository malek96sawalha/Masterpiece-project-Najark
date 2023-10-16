<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->dateTime('orderDate');
            $table->float('totalPrice');
            $table->unsignedBigInteger('customerId');
            $table->unsignedBigInteger('shipmentId');
            $table->unsignedBigInteger('paymentID');
            $table->timestamps();

            $table->foreign('customerId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shipmentId')->references('id')->on('shipments')->onDelete('cascade');
            $table->foreign('paymentId')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
};
