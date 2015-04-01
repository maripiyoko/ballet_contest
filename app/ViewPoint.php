<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\JudgeViewPoint;
use App\ViewPoint;

class ViewPoint extends Model {

  protected $table = 'viewpoints';

  public function contest() {
    return $this->belongsTo('App\Contest');
  }

  public function judges() {
    $models = [];
    $judgeViewpoints = JudgeViewPoint::where('viewpoint_id', $this->id);
    foreach($judgeViewpoints->get() as $jv) {
      $m = Judge::where('id', $jv->judge_id)->first();
      array_push($models, $m);
    }
    return $models;
  }

  public function sumupScores($player_id) {
    $avgScore = DB::table('scores')
      ->select(DB::raw('AVG(score)'))
      ->where('viewpoint_id', '=', $this->id)
      ->where('player_id', '=', $player_id)
      ->first();
    return $avgScore->avg;
  }

}
