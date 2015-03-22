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
        'view_points' => '1,3,6',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => '深川 秀夫',
        'view_points' => '1,2,7',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => 'Martin Fredmann',
        'view_points' => '1,3,7',
        'contest_id' => 1
      ],
      [
        'id' => 4,
        'name' => 'Inessa Plekhanova',
        'view_points' => '1,2,3',
        'contest_id' => 1
      ],
      [
        'id' => 5,
        'name' => '針山 愛美',
        'view_points' => '1,2,5',
        'contest_id' => 1
      ],
      [
        'id' => 6,
        'name' => '福田 一雄',
        'view_points' => '1,4,5',
        'contest_id' => 1
      ],
      [
        'id' => 7,
        'name' => '林 愛子',
        'view_points' => '1,4,6',
        'contest_id' => 1
        ]
    ];

    foreach($judge_array as $j) {
      Judge::create($j);
    }

  }

}
