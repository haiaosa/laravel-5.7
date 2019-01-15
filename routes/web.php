<?php
Route::get('/', function() {
	return view('welcome');
});

// bulma template

Route::get('/bulma', function() {
	return view('bulma.master');
});

Route::get('/bulma/base', function() {
	return view('bulma.posts.base');
});

Route::get('/bulma/blog', function() {
	return view('bulma.posts.blog');
});

Route::get('/bulma/launch', function() {
	return view('bulma.posts.launch');
});

Route::get('/bulma/test', function() {
	return view('bulma.test');
});

// -------------------------

Route::get('/stories','StoryController@index');

Route::get('/stories/create','StoryController@create');

Route::post('/stories','StoryController@store');

Route::get('/stories/{story}','StoryController@show');

Route::get('/stories/{story}/edit','StoryController@edit');

Route::patch('/stories/{story}','StoryController@update');

Route::delete('/stories/{story}','StoryController@destroy');


