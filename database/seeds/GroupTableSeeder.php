<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Group;

class GroupTableSeeder extends Seeder {

  public function run() {
    DB::table('groups')->delete();

    $group_array = [
      [
        'id' => 1,
        'name' => '1年生',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => '2年生',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => '3年生',
        'contest_id' => 1
      ],
      [
        'id' => 4,
        'name' => '4年生',
        'contest_id' => 1
      ],
      [
        'id' => 5,
        'name' => '5年生',
        'contest_id' => 1
      ],
      [
        'id' => 6,
        'name' => '6年生',
        'contest_id' => 1
      ]
    ];

    foreach($group_array as $g) {
      Group::create($g);
    }

  }

}
