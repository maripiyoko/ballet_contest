<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Player;

class PlayerTableSeeder extends Seeder {

  public function run() {
    DB::table('players')->delete();

    $player_array = [
      [
        'id' => 1,
        'name' => '田中 ゆかり',
        'group_id' => 1
      ],
      [
        'id' => 2,
        'name' => '渡辺 香奈',
        'group_id' => 1
      ],
      [
        'id' => 3,
        'name' => '高橋 優香',
        'group_id' => 1
      ],
      [
        'id' => 4,
        'name' => '斉藤 優子',
        'group_id' => 2
      ],
      [
        'id' => 5,
        'name' => '相川 咲紀',
        'group_id' => 2
      ],
      [
        'id' => 6,
        'name' => '加藤 颯太',
        'group_id' => 3
      ]
    ];

    foreach($player_array as $p) {
      Player::create($p);
    }

  }

}
