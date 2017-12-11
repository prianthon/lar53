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

Route::get('/about', 'MyController@showAbout');

Route::get('/testmodel', function() {
	$post = new App\Post;
	$post->title = "7 Amalan Pembuka Jodoh";
	$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
	$post->save();
	return $post;
});