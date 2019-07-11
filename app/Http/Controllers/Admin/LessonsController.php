<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Lesson;
use App\Course;

class LessonsController extends Controller {

    public function index() {

        $title = 'Lessons';

        $lessons = Lesson::all();

        return view('admin.lessons.index', compact('lessons', 'title'));

    }

    public function create(Course $course) {

        $data = array(
            'title' => 'Create Lesson',

            // label fields, allows reusable partial
            'title_field' => 'Lesson Title',
            'body_field' => 'Lesson Description',

            // form selectors used in template conditionsals to build layouts
            'form_for' => 'lesson', // course or lesson
            'form_type' => 'create' // edit or create
        );

        return view('admin.lessons.create')->with($data);

    }

    public function store(Course $course) {

        Lesson::create([
            'course_id' => $course->id,
            'title' => request('title')
        ]);

        return back();
    }

    public function show(Lesson $lesson) {

        $title = $lesson->title;

        return view('admin.lessons.show', compact('title', 'lesson'));
     }

    public function edit(Lesson $lesson, Request $request) {

        $data = array(

            'title' => 'Edit Lesson',

            // label fields, allows reusable partial
            'title_field' => 'Lesson Title',
            'body_field' => 'Lesson Description',

            // form selectors used in template conditionsals to build layouts
            'form_for' => 'lesson', // course or lesson
            'form_type' => 'edit' // edit or create

        );

        return view('admin.lessons.edit', compact('lesson'))->with($data);

    }


    public function update(Lesson $lesson) {

        switch(request()->input('action')) {

            case 'save':

                $lesson->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                    'body' => 'nullable',
                    'image' => 'nullable',
                ]));

                return redirect("admin/lessons/$lesson->id/edit");
                break;

            case 'save_close':

                $lesson->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                    'body' => 'nullable',
                    'image' => 'nullable',
                ]));

                return redirect("admin/courses/$lesson->course_id/edit");
                break;

            case 'cancel':
                return redirect("admin/courses/$lesson->course_id/edit");
                break;
        }
    }

    public function destroy(Lesson $lesson) {

        $lesson->delete();

        return back();
    }
}
