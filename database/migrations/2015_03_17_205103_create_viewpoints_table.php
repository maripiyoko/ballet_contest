<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewpointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viewpoints', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('name')->unique();
      $table->string('description');
      $table->integer('contest_id')->unsigned()->default(0);
      $table->foreign('contest_id')
        ->references('id')->on('contests')->onDelete('cascade');
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
		Schema::drop('viewpoints');
	}

}
