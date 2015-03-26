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
    return JudgeViewPoint::leftJoin('viewpoints',
      'judge_viewpoints.viewpoint_id', '=', 'viewpoints.id' )
      ->where('viewpoints.id', '=', $this->id)->get();
  }

}
