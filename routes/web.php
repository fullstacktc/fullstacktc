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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/talk', function () {
    return view('talk');
});

Route::post('/talksubmission', 'TalkSubmissionsController@store');
Route::get('/talksubmission', 'TalkSubmissionsController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
