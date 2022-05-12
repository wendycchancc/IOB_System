<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcategory', function (Blueprint $table) {
            $table->bigIncrements('itemcategoryId');
            $table->string('name');
            $table->integer('delete');
            $table->date('managementdate',0);
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
        Schema::dropIfExists('itemcategory');
    }
}
