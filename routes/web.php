<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['middleware' => 'auth'], function(){

	//Posts
	Route::get('profile/{slug}/posts', 'PostController@index')->name('post.index');
	Route::get('profile/new-post', 'PostController@create')->name('post.create');
	Route::post('post/created', 'PostController@store')->name('post.store');
	Route::get('post/{slug}/edit', 'PostController@edit')->name('post.edit');
	Route::put('post/{slug}/updated', 'PostController@update')->name('post.update');

	//Profile
	Route::get('profile/{slug}', 'ProfileController')->name('profile');
	Route::put('profile/{slug}/image-updated', 'ImageController')->name('profile.image.update');

	//User
	Route::put('profile/{slug}/user/updated', 'UserController@update')->name('user.update');



});


Auth::routes();
