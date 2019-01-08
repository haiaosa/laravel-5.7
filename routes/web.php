<?php
Route::get('/', function() {
	return view('welcome');
});

Route::get('/stories','StoryController@index');

Route::get('/stories/create','StoryController@create');

Route::post('/stories','StoryController@store');

Route::get('/stories/{story}','StoryController@show');

Route::get('/stories/{story}/edit','StoryController@edit');

Route::patch('/stories/{story}','StoryController@update');

Route::delete('/stories/{story}','StoryController@destroy');


