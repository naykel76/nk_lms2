<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourse;

use App\Course;

class CoursesController extends Controller {

    public function index() {

        $title = 'Courses';

        $courses = Course::all();

        return view('admin.courses.index', compact('title', 'courses'));

    }

    public function create() {

        $data = array(
            'title' => 'Create Course',
            'body_field' => 'Course Description',

            // form selectors used in template conditionsals to build layouts
            'title_field' => 'Course Title', // db title allows reusable partial
            'form_for' => 'course',     // course or lesson
            'form_type' => 'create'       // edit or create
        );

        return view('admin.courses.create')->with($data);
    }

    public function store(Course $course) {

        $attributes = request()->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => 'nullable',
            'headline' => ['max:255'],
            'body' => 'nullable',
            'price' => ['required', 'numeric'],
            'image' => 'nullable',
        ]);

        Course::create($attributes);

        return redirect()->route('admin.courses.index');

    }

    public function show(Course $course) {

        $title = 'Course';

        return view('admin.courses.show', compact('title', 'course'));

    }

    public function edit(Course $course) {

        $data = array(
            'title' => 'Edit Course',
            'title_field' => 'Course Title',
            'body_field' => 'Course Description',

            // form selectors used in template conditionsals to build layouts
            'form_for' => 'course',     // course or lesson
            'form_type' => 'edit'       // edit or create
        );

        return view('admin.courses.edit', compact('course'))->with($data);
    }

    public function update(Course $course) {

        switch(request()->input('action')) {

            case 'save':

                $course->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                    'headline' => ['max:255'],
                    'body' => 'nullable',
                    'price' => ['required', 'numeric'],
                    'image' => 'nullable',
                ]));

                return redirect("admin/courses/$course->id/edit");
                break;

            case 'save_close':

                $course->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                    'headline' => ['max:255'],
                    'body' => 'nullable',
                    'price' => ['required', 'numeric'],
                    'image' => 'nullable',
                ]));

                return redirect('admin/courses');
                break;

            case 'cancel':
                return redirect('admin/courses');
                break;
        }
    }

    public function destroy(Course $course) {

        $course->delete();

        return redirect('admin/courses');
    }
}
