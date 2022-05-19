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
            $table->id()->unique();
            $table->bigInteger('memberID')->unsigned();
            $table->bigInteger('goodsID')->unsigned();
            $table->string('payWay');
            $table->integer('amount')->unsigned();
            $table->integer('total')->unsigned();
            $table->string('status');

            $table->foreign('memberID')->references('id')->on('users');
            $table->foreign('goodsID')->references('id')->on('goods');
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
