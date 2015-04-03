<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('excel/download', function(){
	Excel::create('Filename', function($excel) {

		// Set the title
		$excel->setTitle('Our new awesome title');

		// Chain the setters
		$excel->setCreator('Maatwebsite')
		->setCompany('Maatwebsite');

		// Call them separately
		$excel->setDescription('A demonstration to change the file properties');

		$excel->sheet('First sheet', function($sheet) {

			$sheet->setCellValueByColumnAndRow(0, 1, 'excel' );
			$sheet->setCellValueByColumnAndRow(1, 1, 'test' );
			$sheet->setCellValueByColumnAndRow(2, 2, 'OK?' );


			//$sheet->loadView('group');
		});

	})->export('xls');


});

Route::get('result/download/{id}', 'ResultController@download');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('contest', 'ContestController', ['only' => ['show'] ]);
Route::resource('result', 'ResultController', ['only' => ['show'] ]);
Route::resource('group', 'GroupController', ['only' => ['show'] ]);
Route::resource('group.judge', 'GroupJudgeController', ['only' => ['show'] ]);
Route::resource('score', 'ScoreController', ['only' => ['store', 'update', 'destroy'] ]);
