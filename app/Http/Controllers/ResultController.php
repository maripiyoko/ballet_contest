<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contest;

use Illuminate\Http\Request;

use Excel;

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
    return view('result')->with(compact('contest'));
	}

  public function download($id)
  {
    $contest = Contest::find($id);
    $fileName = $contest->name;

    Excel::create($fileName, function($excel) use ($contest) {
      foreach($contest->groups as $group) {
        $excel->sheet($group->name, function($sheet) use ($contest, $group) {
          $sheet->loadView('result-table')
            ->with(compact('contest', 'group'));
        });
      }
    })->export('xls');

  }
}
