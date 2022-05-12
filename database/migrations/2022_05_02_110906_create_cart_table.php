<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('cartId');
            $table->date('createdate', 0);
            $table->biginteger('quantity');
            $table->integer('status');
            $table->unsignedBigInteger('ownerId');
            $table->foreign('ownerId')->references('id')->on('users');
            $table->unsignedBigInteger('itemsId');
            $table->foreign('itemsId')->references('itemsId')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
