<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contest;
use App\ViewPoint;

use Illuminate\Http\Request;

class ResultController extends Controller {

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
    $judgesViewpointArray = [];
    foreach($contest->judges as $judge) {
      $viewpoint_ids = explode(',', $judge->view_points);
      $judgesViewpoints = [];
      foreach($viewpoint_ids as $viewpoint_id) {
        array_push( $judgesViewpoints, ViewPoint::where('id', $viewpoint_id)->first());
      }
      //var_dump($judgesViewpoints);
      $judgesViewpointsArray[$judge->id] = $judgesViewpoints;
    }
    //dd($judgesViewpointsArray);
		return view('result')->with(compact('contest', 'judgesViewpointsArray'));
	}

}
