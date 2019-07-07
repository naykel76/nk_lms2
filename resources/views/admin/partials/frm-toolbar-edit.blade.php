{{-- the toolbar must be placed inside the form to submit --}}

<div class="row">

  <div class="col">

    <button class="btn success" type="submit" name="action" value="save">Save</button>

    <button class="btn" type="submit" name="action" value="save_close">Save and Close</button>

    @if ($form_for === 'course')

    <a href="{{ url('admin/courses', $course->id) }}" class="btn primary" target="_blank">Preview</a>

    @else

    <a href="{{ url('admin/lessons', $lesson->id) }}" class="btn primary" target="_blank">Preview (check if works!)</a>

    @endif

    <button class="btn danger" type="submit" name="action" value="cancel">Cancel</button>

  </div>

</div>
