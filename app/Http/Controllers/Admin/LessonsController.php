<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Lesson;
use App\CourseModule;

class LessonsController extends Controller
{

    public function index()
    {
        $title = 'Lessons List';
        $lessons = Lesson::all();

        return view('admin.lessons.index', compact('title', 'lessons'));
    }

    public function store(CourseModule $courseModule)
    {

        request()->validate([
            'lesson_title' => 'required'
        ]);

        Lesson::create([
            'course_module_id' => $courseModule->id,
            'title' => request('lesson_title')
        ]);

        return back();
    }

    // public function show(Lesson $lesson)
    // {

    //     $title = $lesson->title;

    //     return view('admin.lessons.show', compact('title', 'lesson'));
    // }

    public function edit(Lesson $lesson, Request $request)
    {

        $data = [
            'title' => 'Edit Lesson',
            'title_field' => $lesson->title
        ];

        // return the view template passing in the 'lesson' object and data array
        return view('admin.lessons.edit', compact('lesson'))->with($data);
    }


    // public function update(Lesson $lesson)
    // { }

    public function destroy(Lesson $lesson)
    {

        $lesson->delete();

        return back();
    }
}