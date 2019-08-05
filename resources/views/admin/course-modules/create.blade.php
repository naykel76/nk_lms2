{{---------------------------------------------------------------------------
  Create new course-module form
---------------------------------------------------------------------------}}

<form method="POST" action="/admin/courses/{{ $course->id }}/course-modules"">

@csrf

<div class=" row">
  <input type="text" name="module_title" placeholder="Enter course module" class="{{ $errors->has('module_title') ? 'danger' : '' }}">
  </div>

  <div class="row">
    <button type="submit" class="btn-success">Add New Module</button>
  </div>

</form>
