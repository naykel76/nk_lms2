<?php

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group( function() {
Route::prefix('admin')->name('admin.')->group( function() {
    Route::resource('courses','Admin\CoursesController');
    Route::resource('lessons','Admin\LessonsController');

    Route::post('courses/{course}/lessons', 'Admin\LessonsController@store');
});

// Route::post('admin/courses/{course}/lessons', 'Admin\LessonsController@store');

//
