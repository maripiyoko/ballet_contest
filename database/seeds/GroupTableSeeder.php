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
        'name' => 'L1',
        'contest_id' => 1
      ],
      [
        'id' => 2,
        'name' => 'L2',
        'contest_id' => 1
      ],
      [
        'id' => 3,
        'name' => 'L3',
        'contest_id' => 1
      ],
      [
        'id' => 4,
        'name' => 'L4',
        'contest_id' => 1
      ],
      [
        'id' => 5,
        'name' => 'L5',
        'contest_id' => 1
      ],
      [
        'id' => 6,
        'name' => 'J1',
        'contest_id' => 1
      ],
      [
        'id' => 7,
        'name' => 'J2',
        'contest_id' => 1
      ],
      [
        'id' => 8,
        'name' => 'J3',
        'contest_id' => 1
      ],
      [
        'id' => 9,
        'name' => 'S1',
        'contest_id' => 1
      ],
      [
        'id' => 10,
        'name' => 'S2',
        'contest_id' => 1
      ]
    ];

    foreach($group_array as $g) {
      Group::create($g);
    }

  }

}
