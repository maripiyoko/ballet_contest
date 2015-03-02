<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder {

  public function run() {
    User::truncate();

    User::create(
      [
        'name' => 'test user 1',
        'password' => Hash::make('foobar'),
        'email' => 'testuser1@gmail.com'
      ]
    );
  }

}
