<?php namespace App;

use Illuminate\Database\Eloquent\Model;

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

}
