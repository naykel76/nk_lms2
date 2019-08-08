<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course;
use App\CourseModule;

class CourseModulesController extends Controller
{
    public function index()
    {
        $title = 'Course Modules List';
        $modules = CourseModule::all();

        return view('admin.course-modules.index', compact('title', 'modules'));
    }

    public function store(Course $course)
    {

        $attributes = request()->validate([
            'module_title' => 'required'
        ]);

        CourseModule::create([
            'course_id' => $course->id,
            'title' => request('module_title')

        ]);

        return back();
    }

    public function edit(CourseModule $courseModule)
    {

        $data = array(
            'title' => 'Edit Course Module',        // as displayed on the page as main heading and site the title
            // label fields, allows reusable components
            'title_label' => 'Module Title',        // as displayed on the 'title' input label
            // 'body_label' => 'Lesson Description',   // as displayed on the 'body' input label
        );

        return view('admin.course-modules.edit', compact('courseModule'))->with($data);
    }


    public function update(CourseModule $courseModule)
    {

        switch (request()->input('action')) {

            case 'save':

                $courseModule->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable'
                ]));

                return redirect("admin/course-modules/$courseModule->id/edit");
                // return redirect("admin/lessons/$lesson->id/edit");

                break;

            case 'save_close':

                $courseModule->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                    'body' => 'nullable',
                    'image' => 'nullable',
                ]));

                return redirect("admin/courses/$courseModule->course_id/edit");

                break;

            case 'cancel':

                return redirect("admin/courses/$courseModule->course_id/edit");

                break;
        }


        $courseModule->update(request(['title']));

        return back();
    }

    public function destroy(CourseModule $courseModule)
    {
        $courseModule->delete();

        return back();
    }
}


// $course->update(request()->validate([
//     'title' => ['required', 'min:5', 'max:255'],
//     'slug' => 'nullable',
//     'headline' => ['max:255'],
//     'body' => 'nullable',
//     'price' => ['required', 'numeric'],
//     'image' => 'nullable',
// ]));