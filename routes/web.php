<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

header('Access-Control-Allow-Origin: http://localhost:8080');


Route::get('/', ["uses" => "HomeController@index", "as" => "welcome"]);

Route::get('/bewertungen/', function () {
	return view("overview");
});
Route::get('/bewertungen/{id}',
	["uses" => "RateController@index", "as" => "bewertungen"]);


Route::get('/announcements', function () {
	return \App\Announcement::where('active', '=', true)->get();
});

Auth::routes();

Route::group(["prefix" => "admin"], function () {

	Route::get("/",
		["uses" => "DashboardController@index", "as" => "tdot.dashboard"]);

	Route::get('/campus-tv', 'AnnouncementController@index')->name('campus-tv');
	Route::get('/campus-tv/create', 'AnnouncementController@create')->name('campus-tv-create');
	Route::get('/campus-tv/edit/{id}', 'AnnouncementController@edit')->name('campus-tv-edit');
	Route::post('/campus-tv/update/{id}', 'AnnouncementController@update')->name('campus-tv-update');
	Route::post('/campus-tv/store/', 'AnnouncementController@store')->name('campus-tv-store');
	Route::get('/campus-tv/delete/{id}', 'AnnouncementController@destroy')->name('campus-tv-destroy');
	Route::get('/campus-tv/toggle/{id}', 'AnnouncementController@toggleVisibility')->name('campus-tv-toggle');

});


Route::group(["prefix" => "tdot"], function () {


	Route::get('',
		["uses" => "DashboardController@listEvents", "as" => "tdot.list"]);


});
