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

header('Access-Control-Allow-Origin: *');

Route::get('/', function () {
	return view('welcome');
});

/**
 * Campus TV Stream
 */
Route::get('/announcements', function () {
	return \App\Announcement::where('active', '=', true)->get();
});

/** Infoscreen */
Route::get('/infoscreen', ["uses" => "HomeController@index", "as" => "infoscreen"]);

/**
 * Bewertungstablets
 */
Route::group(['prefix' => 'bewertungen'], function () {
	Route::get('/', function () {
		return view("overview");
	});
	Route::get('/{id}',
		["uses" => "RateController@index", "as" => "bewertungen"]);
});


Auth::routes();

/**
 * Backend Routes
 */
Route::group(["prefix" => "admin", 'middleware' => "auth"], function () {

	Route::get("/",
		["uses" => "DashboardController@index", "as" => "tdot.dashboard"]);

	Route::get('/campus-tv', 'AnnouncementController@index')->name('campus-tv');
	Route::get('/campus-tv/create', 'AnnouncementController@create')->name('campus-tv-create');
	Route::get('/campus-tv/edit/{id}', 'AnnouncementController@edit')->name('campus-tv-edit');
	Route::post('/campus-tv/update/{id}', 'AnnouncementController@update')->name('campus-tv-update');
	Route::post('/campus-tv/store/', 'AnnouncementController@store')->name('campus-tv-store');
	Route::get('/campus-tv/delete/{id}', 'AnnouncementController@destroy')->name('campus-tv-destroy');
	Route::get('/campus-tv/toggle/{id}','AnnouncementController@toggleVisibility')->name('campus-tv-toggle');

	Route::group(['prefix' => 'booking'], function () {
	   Route::get('/', ['uses' => 'booking\BookingController@index', 'as' => 'booking.main']);
    });

	Route::group(['prefix' => 'ircc'], function () {
		Route::get('/', ['uses' => 'ircc\MainController@index', 'as' => 'ircc.main']);
		Route::get('/map', ['uses' => 'ircc\MainController@map', 'as' => 'ircc.map']);
		Route::get('/add', ['uses' => 'ircc\MainController@create', 'as' => 'ircc.create']);
		Route::post('/add', ['uses' => 'ircc\MainController@store', 'as' => 'ircc.store']);
		Route::get('/import', ['uses' => 'ImportController@index', 'as' => 'ircc.import.index']);
		Route::post('/import', ['uses' => 'ImportController@upload', 'as' => 'ircc.import.upload']);
	});

	Route::group(['prefix' => 'lecturer'], function () {
		Route::get('/', 'LecturerController@index')->name('lecturer.index');

	});

});

/**
 * Tdot Routes
 */
Route::group(["prefix" => "tdot"], function () {
	Route::get('',
		["uses" => "DashboardController@listEvents", "as" => "tdot.list"]);
});
