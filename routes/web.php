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

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
	Route::get('/index', 'AdminsController@index')->name('index');
	Route::post('/posts/{id}/approve', 'AdminPostscontroller@approve');
});

Route::get('/api/pending/posts', function () {
	return \App\Post::whereApproved(0)->with('user')->get();
});


Auth::routes();
Route::post('/login', 'Auth\LoginController@determineLoginType')->name('determine');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/create', 'PostsController@create')->name('post.create');
Route::resource('posts', 'PostsController');