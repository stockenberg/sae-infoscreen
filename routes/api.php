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

Route::get('/lecturer/refresh', 'LecturerController@refresh')->name('lecturer.refresh');
Route::post('/lecturer', 'LecturerController@store')->name('lecturer.store');
Route::delete('/lecturer/{id}', 'LecturerController@destroy')->name('lecturer.delete');
Route::put('/lecturer/update', 'LecturerController@update')->name('lecturer.update');

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

Route::post('/ircc/associateIndustry', [
	'uses' => 'ircc\MainController@associateIndustry'
]);

Route::get('/ircc/company/{id}', ['uses' => 'ircc\MainController@getCompany']);


Route::get('/ircc/autocomplete/student', ['uses' => 'ircc\MainController@autocompleteStudent']);


Route::post('/ircc/updateContact', [
	'uses' => 'ircc\MainController@updateContact', 'as' => 'ircc.update.contact'
]);