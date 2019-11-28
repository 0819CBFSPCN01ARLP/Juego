<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('success');
          $table->integer('number');
          $table->integer('time');
          $table->integer('score');
          $table->unsignedBigInteger('game_id');
          $table->foreign('game_id')->references('id')->on('game');
          // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
