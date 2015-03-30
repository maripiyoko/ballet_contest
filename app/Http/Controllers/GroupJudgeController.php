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
    $viewpoints = $judge->viewpoints();
    return view('group_judge')
      ->with(compact('group', 'judge', 'contest', 'players', 'viewpoints'));
	}

}
