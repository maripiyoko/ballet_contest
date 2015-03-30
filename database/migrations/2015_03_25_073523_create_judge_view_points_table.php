<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgeViewPointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('judge_viewpoints', function(Blueprint $table)
		{
      $table->integer('judge_id')->unsigned()->default(0);
      $table->foreign('judge_id')->references('id')->on('judges')->onDelete('cascade');
      $table->integer('viewpoint_id')->unsigned()->default(0);
      $table->foreign('viewpoint_id')->references('id')->on('viewpoints')->onDelete('cascade');
      $table->primary(['judge_id', 'viewpoint_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('judge_viewpoints');
	}

}
