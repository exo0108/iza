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
    Schema::create('reserve', function (Blueprint $table) {
        $table->id()->unique();    
        $table->bigInteger('memberID')->unsigned();
        $table->bigInteger('periodID')->unsigned();      
        $table->bigInteger('caseID')->unsigned();      
        $table->date('date');    
        $table->string('status');
        
        $table->foreign('memberID')->references('id')->on('users');
        $table->foreign('periodID')->references('id')->on('period');
        $table->foreign('caseID')->references('id')->on('case');
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
