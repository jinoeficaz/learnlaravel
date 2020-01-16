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
    return view('welcome',['project_name' => 'Experimenting Laravel','menu_needed' => 'no']);
});


Route::get('/login',function(){
	return view('welcome',['project_name' => 'Dev Test','menu_needed' => 'no']);
});

Route::get('/home', function ($parameter = 'Jino') {
    //return view('welcome');
    return 'Hello Mr.'.$parameter.', Welcome to this page';
});


Route::get('/rooter','rooter@index');



Route::view('/welcome','welcome',['project_name' => 'Experimenting Laravel','menu_needed' => 'no']);

//Route::view('/welcome/{$name}','welcome',['project_name' => 'Experimenting Laravel','menu_needed' => 'no','name' => $name]);

Route::get('/checkmiddleware',function(){
	echo 'Hello Middle ware is working';
})->middleware('checkage');

Route::fallback(function(){

	/*view using View Facades*/
	return View::make('welcome',['project_name' => 'Ouch! Sorry ! The Requested route is not found in this server.','menu_needed' => 'no']);
});