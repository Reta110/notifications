<?php

use App\User;
use App\Notifications\TaskCompleted;

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

//DOING THE EVENT LISTENER
Route::get('/', function () {

	//User::find(1)->notify(new TaskCompleted);

	return view('welcome');
});

//DOING THE BROADCASTING
Route::get('/alert', function () {

	return view('eventListener');
});

Route::get('/trigger', function () {


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

