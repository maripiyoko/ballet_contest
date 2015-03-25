<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use App\JudgeViewPoint;
use App\Judge;

class Judge extends Model {

  protected $table = 'judges';

  public function contest() {
    return $this->belongsTo('App\Contest');
  }

  public function viewpoints() {
    $judgeViewPoints = JudgeViewPoint::where('judge_id', '=', $this->id)->get();
    $viewpoints = array();
    foreach($judgeViewPoints as $jp) {
      $v = ViewPoint::find($jp->viewpoint_id);
      array_push($viewpoints, $v);
    }
    return $viewpoints;
  }

}
