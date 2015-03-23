<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

use Request;
use Auth;
use App\Score;

class ScoreController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('organization');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $player_id = Request::input('player_id');
    $judge_id = Request::input('judge_id');
    $viewpoint_id = Request::input('viewpoint_id');
    $score_point = Request::input('score');
    $user_id = \Auth::user()->id;
    // save
    $score = new \App\Score();
    $score->player_id = $player_id;
    $score->judge_id = $judge_id;
    $score->viewpoint_id = $viewpoint_id;
    $score->user_id = $user_id;
    $score->score = $score_point;
    $score->save();
    // response
    $score_id = $score->id;
    return response()->json(['id' => $score_id]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
    $score_point = Request::input('score');
    $user_id = \Auth::user()->id;
    // save
    $score = \App\Score::find($id);
    $score->user_id = $user_id;
    $score->score = $score_point;
    $score->save();
    // response
    $score_id = $score->id;
    return response()->json(['id' => $score_id, 'score' => $score->score]);
	}

}
