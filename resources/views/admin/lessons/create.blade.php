{{---------------------------------------------------------------------------
  Create new lesson form
---------------------------------------------------------------------------}}

<form method="POST" action="/admin/course-modules/{{ $courseModule->id }}/lessons">

  @csrf

  <div class="row">
    <input type="text" name="lesson_title" placeholder="Enter lesson title" class="{{ $errors->has('lesson_title') ? 'danger' : '' }}">
  </div>

  <div class="row">
    <button type="submit" class="btn-success">Add Lesson</button>
  </div>

</form>
