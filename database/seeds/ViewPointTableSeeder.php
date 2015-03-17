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
        'name' => '演技力',
        'description' => '演技力があるか',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => '音楽',
        'description' => '音楽と合っているか',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => '構成',
        'description' => '全体の構成バランス',
        'contest_id' => 1
      ]
    ];

    foreach($vp_array as $vp) {
      ViewPoint::create($vp);
    }

  }

}
