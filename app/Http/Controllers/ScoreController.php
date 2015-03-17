<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;

class ScoreController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('organization');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
    $player_id = $request->input('player_id');
    $judge_id = $request->input('judge_id');
    $viewpoint_id = $request->input('viewpoint_id');
    $score = $request->input('score');
    $currentUser = \Auth::user();
    $user_id = $currentUser->id;
    // save
    $score = new App\Score();
    $score->player_id = $player_id;
    $score->judge_id = $judge_id;
    $score->viewpoint_id = $viewpoint_id;
    $score->user_id = $user_id;
    $score->score = score;
    $score.save();
    // response
    $score_id = $score->id;
    return $response->json(['id' => $score_id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
