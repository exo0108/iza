<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();            
            $table->integer('amount')->unsigned();
            $table->integer('total')->unsigned();
            $table->bigInteger('orderID')->unsigned();
            $table->bigInteger('goodsID')->unsigned();
            $table->timestamps();

            $table->foreign('orderID')->references('id')->on('orders');
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
        Schema::dropIfExists('order_item');
    }
}
