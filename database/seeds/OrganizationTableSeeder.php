<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Organization;

class OrganizationTableSeeder extends Seeder {

  public function run() {
    DB::table('organizations')->delete();

    Organization::create(
      [
        'id' => 1,
        'name' => 'HEARTS AND MINDS',
        'owner_id' => 1
      ]
    );
  }

}
