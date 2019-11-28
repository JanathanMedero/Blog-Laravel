<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['middleware' => 'auth'], function(){

	Route::get('profile/{slug}/posts', 'PostController@index')->name('post.index');
	Route::post('post/created', 'PostController@store')->name('post.store');
	Route::get('profile/new-post', 'PostController@create')->name('post.create');

	Route::get('profile/{slug}', 'ProfileController')->name('profile');

});


Auth::routes();
