<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;

class LessonsController extends Controller {

    public function index() {

        $title = 'Lessons';

        $lessons = Lesson::all();

        return view('admin.lessons.index', compact('lessons', 'title'));

    }

    public function create() {

        $title = 'Create Lesson';

        return view('admin.lessons.create', compact('title'));
    }

    public function store(Request $request) {

    }

    public function show(Lesson $lesson) {

    }

    public function edit(Lesson $lesson) {

        $title = 'Edit Lesson';



    }

    public function update(Request $request, $id) {

    }

    public function destroy(Lesson $lesson) {

        $lesson->delete();

        return redirect('admin/lessons');
    }
}
