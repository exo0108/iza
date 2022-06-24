<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveTable extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id()->unique();    
        $table->date('date');
        $table->string('period');
        $table->bigInteger('memberID')->unsigned();
        $table->bigInteger('storeID')->unsigned();
        $table->bigInteger('caseID')->unsigned();
        $table->timestamps();        
        
        $table->foreign('memberID')->references('id')->on('users');
        $table->foreign('storeID')->references('id')->on('stores');
        $table->foreign('caseID')->references('id')->on('cases');
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('reserve');
}
}
