<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contest;
use App\Player;
use App\Score;

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
    $scores = [];
    $players = Player::all();
    foreach($contest->viewpoints as $viewpoint) {
      foreach($viewpoint->judges() as $judge) {
        foreach($players as $player) {
          $s = Score::where('judge_id', $judge->id)
            ->where('viewpoint_id', $viewpoint->id)
            ->where('player_id', $player->id)->first();
          $scores[$judge->id][$viewpoint->id][$player->id] = $s;
        }
      }
    }
    //dd($scores);
		return view('result')->with(compact('contest', 'scores'));
	}

}
