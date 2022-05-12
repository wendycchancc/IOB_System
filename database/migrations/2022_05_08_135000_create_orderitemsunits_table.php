<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitemsunits', function (Blueprint $table) {
            $table->bigIncrements('orderitemsunitsId');
            $table->unsignedBigInteger('orderitemsId');
            $table->foreign('orderitemsId')->references('orderitemsId')->on('orderitems');
            $table->integer('adjustmentstotal');
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
        Schema::dropIfExists('orderitemsunits');
    }
}
