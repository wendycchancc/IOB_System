<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('orderId');
            $table->integer('items_total');
            $table->integer('adjustments_total');
            $table->integer('total');
            $table->string('order_state');
            $table->unsignedBigInteger('orderinformationId');
            $table->foreign('orderinformationId')->references('orderinformationId')->on('orderinformation');
            $table->unsignedBigInteger('ownerId');
            $table->foreign('ownerId')->references('id')->on('users');
            $table->unsignedBigInteger('shipmentsId');
            $table->foreign('shipmentsId')->references('shipmentsId')->on('shipments');
            $table->unsignedBigInteger('paymentsId');
            $table->foreign('paymentsId')->references('paymentsId')->on('payments');
            $table->date('createdate', 0);
            $table->date('managementdate',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
