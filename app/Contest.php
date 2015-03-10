<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model {

	protected $table = 'contests';

  public function organization() {
    return $this->belongsTo('App\Organization');
  }

  public function groups() {
    return $this->hasMany('App\Group');
  }

}
