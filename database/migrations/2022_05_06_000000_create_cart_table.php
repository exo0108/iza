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
        Schema::create('carts', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('count');
            $table->bigInteger('memberID')->unsigned();
            $table->bigInteger('goodsID')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('cart');
    }
}
