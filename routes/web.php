<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['middleware' => 'auth'], function(){

	Route::get('profile/new-post', 'PostController@create')->name('post.create');
	Route::get('profile/{slug}', 'ProfileController')->name('profile');

});


Auth::routes();
