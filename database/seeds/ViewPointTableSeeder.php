<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\ViewPoint;

class ViewPointTableSeeder extends Seeder {

  public function run() {
    DB::table('viewpoints')->delete();

    $vp_array = [
      [
        'id' => 1,
        'name' => '芸術性',
        'description' => '芸術性の説明',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => '技術',
        'description' => '技術の説明',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => '感性',
        'description' => '感性の説明',
        'contest_id' => 1
      ],
      [
        'id' => 4,
        'name' => '音楽',
        'description' => '音楽の説明',
        'contest_id' => 1
      ],
      [
        'id' => 5,
        'name' => '表現力',
        'description' => '表現力の説明',
        'contest_id' => 1
      ],
      [
        'id' => 6,
        'name' => '容姿',
        'description' => '容姿の説明',
        'contest_id' => 1
      ],
      [
        'id' => 7,
        'name' => '将来性',
        'description' => '将来性の説明',
        'contest_id' => 1
      ]
    ];

    foreach($vp_array as $vp) {
      ViewPoint::create($vp);
    }

  }

}
