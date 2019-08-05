<?php

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group( function() {
Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('/courses', 'Admin\CoursesController');

    // course modules
    Route::resource('/course-modules', 'Admin\CourseModulesController');
    Route::post('/courses/{course}/course-modules', 'Admin\CourseModulesController@store');

    // lessons
    Route::resource('/lessons', 'Admin\LessonsController');
    Route::post('/course-modules/{course_module}/lessons', 'Admin\LessonsController@store');
});

// this method has a problem with the redirect
// Route::delete('course-modules/{course-module}', 'Admin\CourseModulesController@destroy')->name('course-modules.destroy');