<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Group;
use App\Contest;
use App\Judge;
use App\Player;
use App\ViewPoint;

class GroupJudgeController extends Controller {

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
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $groupId
	 * @param  int  $judgeId
	 * @return Response
	 */
	public function show($groupId, $judgeId)
	{
    $group = Group::find($groupId);
    $judge = Judge::find($judgeId);
    $contest = $group->contest;
    $players = $group->players;
    $viewpoints = $contest->viewpoints;
    return view('group_judge')
      ->with(compact('group', 'judge', 'contest', 'players', 'viewpoints'));
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
