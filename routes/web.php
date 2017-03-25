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

Route::get('/', 'PostController@all');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about', function () {
	return view('about');
});
Route::get('/contact', function () {
	return view('contact');
});
Route::get('/post/create', function () {
	return view('post.create');
});
Route::post('/{user}/post/create', 'PostController@create')->middleware('auth');
Route::get('/{user}/posts', 'PostController@show')->middleware('auth');
Route::get('/posts/{post}', 'PostController@showone');

Route::get('/posts/delete/{post}','PostController@delete')->middleware('auth');
Route::get('/posts/update/{post}','PostController@updateForm')->middleware('auth');
Route::post('/posts/update/{post}','PostController@update')->middleware('auth');