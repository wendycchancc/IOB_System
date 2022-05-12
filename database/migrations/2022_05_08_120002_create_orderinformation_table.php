<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderinformation', function (Blueprint $table) {
            $table->bigIncrements('orderinformationId');
            $table->unsignedBigInteger('orderId');
            $table->string('address', 255);
            $table->string('name', 100);
            $table->integer('phone');
            $table->integer('fax')->nullable();
            $table->integer('telex')->nullable();
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
        Schema::dropIfExists('orderinformation');
    }
}
