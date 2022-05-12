<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('itemsId');
            $table->string('name');
            $table->text('descriptions');
            $table->double('price', 10,1);
            $table->biginteger('stock');
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->integer('status');
            $table->integer('delete');
            $table->date('managementdate',0);
            $table->date('createdate', 0);
            $table->unsignedBigInteger('ownerId');
            $table->foreign('ownerId')->references('id')->on('users');
            $table->unsignedBigInteger('itemcategoryId');
            $table->foreign('itemcategoryId')->references('itemcategoryId')->on('itemcategory');
        });
    }


    public function down()
    {
        Schema::dropIfExists('items');
    }
}
