<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('profile/{slug}', 'ProfileController')->name('profile');

Auth::routes();
