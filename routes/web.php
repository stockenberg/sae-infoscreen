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

Route::get('/bewertungen/', function (){
    return view("overview");
});
Route::get('/bewertungen/{id}', ["uses" => "RateController@index", "as" => "bewertungen"]);




Route::get('/announcements', function () {
	return \App\Announcement::all();
});



Route::group(["prefix" => "tdot"], function(){

    Auth::routes();

    Route::get('', ["uses" => "DashboardController@listEvents", "as" => "tdot.list"]);


    Route::get("/dashboard", ["uses" => "DashboardController@index", "as" => "tdot.dashboard"]);
});
