<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ircc/{id}',
	['uses' => 'ircc\MainController@indexDepartments', 'as' => 'ircc.filtered']);

Route::post('/ircc/addHistory', [
	'uses' => 'ircc\MainController@addHistory', 'as' => 'ircc.add.history'
]);

Route::post('/ircc/addJob', [
	'uses' => 'ircc\MainController@addJob', 'as' => 'ircc.add.job'
]);

Route::post('/ircc/addStudent', [
	'uses' => 'ircc\MainController@addStudent', 'as' => 'ircc.add.student'
]);

Route::post('/ircc/updateContact', [
	'uses' => 'ircc\MainController@updateContact', 'as' => 'ircc.update.contact'
]);