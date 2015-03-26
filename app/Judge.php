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
    $judgeViewpoints = JudgeViewPoint::where('judge_id', $this->id)
      ->leftJoin('viewpoints', 'viewpoints.id', '=', 'judge_viewpoints.viewpoint_id')->get();
    $models = [];
    $eloquentModel = new ViewPoint;
    foreach($judgeViewpoints as $jv) {
      $models[] = $eloquentModel->newFromBuilder($jv);
    }
    return $eloquentModel->newCollection($models);
  }

}
