<?php

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/lessons', 'LessonsController@index');

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group( function() {
Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('/courses', 'Admin\CoursesController');

    // course modules
    Route::resource('/modules', 'Admin\ModulesController');
    Route::post('/courses/{course}/modules', 'Admin\ModulesController@store');

    // lessons
    // Route::resource('/lessons', 'Admin\LessonsController');
    // Route::post('/modules/{course_module}/lessons', 'Admin\LessonsController@store');
});

// this method has a problem with the redirect
// Route::delete('modules/{course-module}', 'Admin\ModulesController@destroy')->name('modules.destroy');