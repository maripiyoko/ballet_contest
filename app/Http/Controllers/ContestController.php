<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contest;

class ContestController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('organization');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    $contest = Contest::find($id);
		return view('contest')->with(compact('contest'));
	}

}
