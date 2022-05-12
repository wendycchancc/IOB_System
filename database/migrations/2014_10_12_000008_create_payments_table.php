<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('paymentsId');
            $table->string('payment_state');
            $table->integer('amount');
            $table->text('payment_details')->nullable();
            $table->date('createdate', 0);
            $table->date('paymentdate', 0);
            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('orderId')->on('order');
            $table->unsignedBigInteger('updatedId');
            $table->foreign('updatedId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
