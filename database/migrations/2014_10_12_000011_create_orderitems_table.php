<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->bigIncrements('orderitemsId');
            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('orderId')->on('order');
            $table->unsignedBigInteger('itemsId');
            $table->foreign('itemsId')->references('itemsId')->on('items');
            $table->biginteger('quantity');
            $table->integer('units_total');
            $table->integer('adjustments_total');
            $table->integer('total');
            $table->date('createdate', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitems');
    }
}
