<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'organizations';

  public function contests() {
    return $this->hasMany('App\Contest');
  }
}
