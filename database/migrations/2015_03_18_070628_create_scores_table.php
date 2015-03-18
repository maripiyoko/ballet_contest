<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('score')->unsigned();
      $table->integer('player_id')->unsigned()->default(0);
      $table->foreign('player_id')
        ->references('id')->on('players')->onDelete('cascade');
      $table->integer('judge_id')->unsigned()->default(0);
      $table->foreign('judge_id')
        ->references('id')->on('judges')->onDelete('cascade');
      $table->integer('viewpoint_id')->unsigned()->default(0);
      $table->foreign('viewpoint_id')
        ->references('id')->on('viewpoints')->onDelete('cascade');
      $table->integer('user_id')->unsigned()->default(0);
      $table->foreign('user_id')
        ->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scores');
	}

}
