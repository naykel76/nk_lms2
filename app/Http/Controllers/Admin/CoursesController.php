<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;

class CoursesController extends Controller {

    public function index() {

        $title = 'Courses';
        $courses = Course::all();
        return view('admin.courses.index', compact('title', 'courses'));

    }

    public function create() {

        $title = 'Create Course';

        return view('admin.courses.create')->with('title', $title);

    }

    public function store() {

        // new instance of course model
        $course = new Course();

        // set the fields
        $course->title = request('title');
        $course->description = request('description');
        $course->price = request('price');

        // persist the database
        $course->save();

        // redirect to main courses page
        return redirect('admin/courses');

    }

    public function show(Course $course) {

        $title = 'Course';

        return view('courses.show', compact('title', 'course'));

    }

    public function edit($id) {

        $title = 'Courses Example';

        // fetch record with id = $id or return 404
        $course = Course::findOrFail($id);

        // load view and pass course data
        return view('admin.courses.edit', compact('title', 'course'));
    }


    public function update($id) {

        // fetch course data or return 404
        $course = Course::findOrFail($id);

        // re-set the fields
        $course->title = request('title');
        $course->description = request('description');
        $course->price = request('price');
        // update the database

        $course->save();
        // redirect to main courses page
        return redirect('admin/courses');
    }

    public function destroy($id) {

        // fetch course data and delete it
        Course::findOrFail($id)->delete();

        // redirect to main courses page
        return redirect('admin/courses');
    }
}
