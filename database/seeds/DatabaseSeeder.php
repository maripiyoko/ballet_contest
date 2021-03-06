<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

    $this->call('UserTableSeeder');
    $this->call('OrganizationTableSeeder');
    $this->call('ContestTableSeeder');
    $this->call('GroupTableSeeder');
    $this->call('PlayerTableSeeder');
    $this->call('JudgeTableSeeder');
    $this->call('ViewPointTableSeeder');
    $this->call('JudgeViewPointTableSeeder');
	}

}
