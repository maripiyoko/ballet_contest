<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Contest;

class ContestTableSeeder extends Seeder {

  public function run() {
    DB::table('contests')->delete();

    Contest::create(
      [
        'id' => 1,
        'name' => 'Contest 1',
        'description' => 'テストコンテスト　学年別',
        'organization_id' => 1,
        'start_date' => '2015/03/25',
        'end_date' => '2015/03/25'
      ]
    );
  }

}
