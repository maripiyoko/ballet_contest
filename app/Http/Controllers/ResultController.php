<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contest;
use App\ViewPoint;
use App\Score;
use App\Player;

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
    $scores = [];
    $players = Player::all();
    foreach($contest->judges as $judge) {
      $viewpoint_ids = explode(',', $judge->view_points);
      $judgesViewpoints = [];
      foreach($viewpoint_ids as $viewpoint_id) {
        array_push( $judgesViewpoints, ViewPoint::where('id', $viewpoint_id)->first());
        foreach($players as $player) {
          $scores[$judge->id][$viewpoint_id][$player->id] =
            Score::where('judge_id', $judge->id)
            ->where('viewpoint_id', $viewpoint_id)
            ->where('player_id', $player->id)->first();
        }
      }
      $judgesViewpointsArray[$judge->id] = $judgesViewpoints;
    }
    return view('result')->with(compact('contest', 'judgesViewpointsArray', 'scores'));
	}

}
