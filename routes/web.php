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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// --------------------- Front End Truyen


Route::get ('/test', function () {

	return view('truyen.trang-chu.test');

});
Route::get ('/truyen', function () {

	return view('truyen.trang-chu.trang-chu');

});
Route::get ('/lich-su', function () {

	return view('truyen.lich-su.lich-su');

});
Route::get ('/theo-doi', function () {

	return view('truyen.theo-doi.theo-doi');

});
Route::get ('/tuyen-nhan-su', function () {

	return view('truyen.tuyen-nhan-su.tuyen-nhan-su');

});
