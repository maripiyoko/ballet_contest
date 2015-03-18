<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model {

  protected $table = 'scores';

  public function viewpoint() {
    return $this->belongsTo('App\ViewPoint');
  }

  public function judge() {
    return $this->belongsTo('App\Judge');
  }

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function player() {
    return $this->belongsTo('App\Player');
  }

}
