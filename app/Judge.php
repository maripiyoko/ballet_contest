<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model {

  protected $table = 'judges';

  public function contest() {
    return $this->belongsTo('App\Judge');
  }

}
