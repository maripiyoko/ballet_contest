<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {

  protected $table = 'players';

  public function group() {
    return $this->belongsTo('App\Group');
  }

  public function score($judge_id, $viewpoint_id) {
    return $this->hasOne('App\Score')
      ->where('judge_id', '=', $judge_id)
      ->where('viewpoint_id', '=', $viewpoint_id)->first();
  }

}
