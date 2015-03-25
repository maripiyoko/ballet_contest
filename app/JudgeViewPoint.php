<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JudgeViewPoint extends Model {

  protected $table = 'judge_viewpoints';

  public $timestamps = false;

  public function judge() {
    return $this->belongsTo('App\Judge', 'judge_id');
  }

  public function viewpoint() {
    return $this->belongsTo('App\ViewPoint', 'viewpoint_id');
  }

}
