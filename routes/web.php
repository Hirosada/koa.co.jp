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
    return view('index');
});

Route::get('/top', 'Main\MainController@index')->name('home');

Route::get('news', function(){
	return view('news');
});

Route::get('company', function() {
	return view('company');
});

Route::get('service', function(){
	return view('service');
});

Route::get('works', function(){
	return view('works');
});

Route::get('contact', function(){
	return view('contact');
});

Route::get('/service/tenpo', function(){
	return view('tenpo_detail');
});

Route::get('/service/seiko', function(){
	return view('seiko_detail');
});

Route::get('/form', 'formController@index');

Route::post('complate', 'formController@get_data');


Route::resource('todo', 'TopController'); 
