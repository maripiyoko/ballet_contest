<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\JudgeViewPoint;

class JudgeViewPointTableSeeder extends Seeder {

  public function run() {
    DB::table('judge_viewpoints')->delete();

    $jv_array = [
      [
        'judge_id' => 1,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 1,
        'viewpoint_id' => '3',
      ],
      [
        'judge_id' => 1,
        'viewpoint_id' => '6',
      ],
      [
        'judge_id' => 2,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 2,
        'viewpoint_id' => '2',
      ],
      [
        'judge_id' => 2,
        'viewpoint_id' => '7',
      ],
      [
        'judge_id' => 3,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 3,
        'viewpoint_id' => '3',
      ],
      [
        'judge_id' => 3,
        'viewpoint_id' => '7',
      ],
      [
        'judge_id' => 4,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 4,
        'viewpoint_id' => '2',
      ],
      [
        'judge_id' => 4,
        'viewpoint_id' => '3',
      ],
      [
        'judge_id' => 5,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 5,
        'viewpoint_id' => '2',
      ],
      [
        'judge_id' => 5,
        'viewpoint_id' => '5',
      ],
      [
        'judge_id' => 6,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 6,
        'viewpoint_id' => '4',
      ],
      [
        'judge_id' => 6,
        'viewpoint_id' => '5',
      ],
      [
        'judge_id' => 7,
        'viewpoint_id' => '1',
      ],
      [
        'judge_id' => 7,
        'viewpoint_id' => '4',
      ],
      [
        'judge_id' => 7,
        'viewpoint_id' => '6',
      ]
    ];

    foreach($jv_array as $j) {
      DB::table('judge_viewpoints')->insert($j);
    }

  }

}
