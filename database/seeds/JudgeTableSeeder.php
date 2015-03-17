<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Judge;

class JudgeTableSeeder extends Seeder {

  public function run() {
    DB::table('judges')->delete();

    $judge_array = [
      [
        'id' => 1,
        'name' => '田中先生',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => '山下先生',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => '竹永先生',
        'contest_id' => 1
      ]
    ];

    foreach($judge_array as $j) {
      Judge::create($j);
    }

  }

}
