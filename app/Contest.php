<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Score;

class Contest extends Model {

	protected $table = 'contests';

  public function organization() {
    return $this->belongsTo('App\Organization');
  }

  public function groups() {
    return $this->hasMany('App\Group');
  }

  public function judges() {
    return $this->hasMany('App\Judge');
  }

  public function viewpoints() {
    return $this->hasMany('App\ViewPoint');
  }

  public function players() {
    return $this->hasManyThrough('App\Player', 'App\Group');
  }

  public function score($judge_id, $viewpoint_id, $player_id) {
    return Score::where('judge_id', $judge_id)
      ->where('viewpoint_id', $viewpoint_id)
      ->where('player_id', $player_id)
      ->first();
  }
}
