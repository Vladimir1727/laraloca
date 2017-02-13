<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/','homeController@index')->middleware('locale');
Route::post('language',array(
	'before'=>'csrf',
	'as'=>'language-chooser',
	'uses'=>'LanguageController@chooser'
	))->middleware('locale');
Route::resource('picture','PictureController');