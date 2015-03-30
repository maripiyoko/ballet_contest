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
    $models = [];
    $judgeViewpoints = JudgeViewPoint::where('judge_id', $this->id);
    foreach($judgeViewpoints->get() as $jv) {
      $m = ViewPoint::where('id', $jv->viewpoint_id)->first();
      array_push($models, $m);
    }
    return $models;
  }

}
