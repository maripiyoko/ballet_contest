<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contests', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('name')->unique();
      $table->string('description');
      $table->timestamp('start_date');
      $table->timestamp('end_date');
      $table->integer('organization_id')->unsigned()->default(0);
      $table->foreign('organization_id')
        ->references('id')->on('organizations')->onDelete('cascade');
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
		Schema::drop('contests');
	}

}
