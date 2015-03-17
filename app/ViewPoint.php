<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewPoint extends Model {

  protected $table = 'viewpoints';

  public function contest() {
    return $this->belongsTo('App\Contest');
  }

}
