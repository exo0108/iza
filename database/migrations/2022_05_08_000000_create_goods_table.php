<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('goods', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
        $table->string('name');
        $table->integer('price');
        $table->string('img');
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('goods');
}
}
