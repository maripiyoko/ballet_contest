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
        'name' => '村山 直儀',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => '深川 秀夫',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => 'Martin Fredmann',
        'contest_id' => 1
      ],
      [
        'id' => 4,
        'name' => 'Inessa Plekhanova',
        'contest_id' => 1
      ],
      [
        'id' => 5,
        'name' => '針山 愛美',
        'contest_id' => 1
      ],
      [
        'id' => 6,
        'name' => '福田 一雄',
        'contest_id' => 1
      ],
      [
        'id' => 7,
        'name' => '林 愛子',
        'contest_id' => 1
        ]
    ];

    foreach($judge_array as $j) {
      Judge::create($j);
    }

  }

}
