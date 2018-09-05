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

/**
 * /talk
 */
Route::get('/talk/submit', function () {
    return view('talk.new');
});
Route::post('/talk/submit', 'TalkSubmissionsController@store');
Route::get('/talk/{id}', 'TalkSubmissionsController@index_one');
Route::get('/talklist', 'TalkSubmissionsController@index'); // This should be /talk/list for some reason it doesnt work with the line above


/**
 * /user
 */
Route::get('/user/list', 'UserController@all_presenters');
Route::get('/user/{username}', 'UserController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
