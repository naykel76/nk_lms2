<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Course;
use App\Module;

class ModulesController extends Controller
{
    public function index()
    {
        $title = 'Course Modules List';
        $modules = Module::all();

        return view('admin.modules.index', compact('title', 'modules'));
    }

    public function store(Course $course)
    {

        $attributes = request()->validate([
            'module_title' => 'required',
        ]);

        Module::create([
            'course_id' => $course->id,
            'title' => request('module_title'),

        ]);

        return back();
    }

    public function edit(Module $module)
    {

        $data = array(
            'title' => 'Edit Course Module', // as displayed on the page as main heading and site the title
            // label fields, allows reusable components
            'title_label' => 'Module Title', // as displayed on the 'title' input label
            // 'body_label' => 'Lesson Description',   // as displayed on the 'body' input label
        );

        return view('admin.modules.edit', compact('module'))->with($data);
    }

    public function update(Module $module)
    {

        switch (request()->input('action')) {

            case 'save':

                $module->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                ]));

                return redirect("admin/modules/$module->id/edit");
                // return redirect("admin/lessons/$lesson->id/edit");

                break;

            case 'save_close':

                $module->update(request()->validate([
                    'title' => ['required', 'min:5', 'max:255'],
                    'slug' => 'nullable',
                    'body' => 'nullable',
                    'image' => 'nullable',
                ]));

                return redirect("admin/courses/$module->course_id/edit");

                break;

            case 'cancel':

                return redirect("admin/courses/$module->course_id/edit");

                break;
        }

        $module->update(request(['title']));

        return back();
    }

    public function destroy(Module $module)
    {
        $module->delete();

        return back();
    }
}