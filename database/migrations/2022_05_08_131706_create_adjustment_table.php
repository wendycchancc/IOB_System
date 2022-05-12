<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjustmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjustment', function (Blueprint $table) {
            $table->bigIncrements('adjustmentId');
            $table->unsignedBigInteger('orderId')->nullable();
            $table->unsignedBigInteger('orderitemsId')->nullable();
            $table->unsignedBigInteger('orderitemsunitsId')->nullable();
            $table->string('type');
            $table->string('label');
            $table->integer('amount');
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
        Schema::dropIfExists('adjustment');
    }
}
