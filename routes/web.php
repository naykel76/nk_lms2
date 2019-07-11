<?php

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group( function() {
Route::prefix('admin')->name('admin.')->group( function() {
    Route::resource('/courses','Admin\CoursesController');
    Route::resource('/lessons','Admin\LessonsController');
    Route::resource('/course-modules','Admin\CourseModulesController');

    // extra route to pass course id
    Route::post('/courses/{course}/course-modules','Admin\CourseModulesController@store')->name('courses.{course}.course-modules');

});

// this method has a problem with the redirect
// Route::delete('course-modules/{course-module}', 'Admin\CourseModulesController@destroy')->name('course-modules.destroy');
