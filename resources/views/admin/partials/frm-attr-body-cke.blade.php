@if ($form_type === 'create')

<div class="row">

  <div class="col">

    <label for="body">{{ $body_field }}</label>

    <textarea id="article-ckeditor" name="body" class="col {{ $errors->has('body') ? 'danger' : '' }}">{{ old('body') }}</textarea>

  </div>

</div>

@else

<div class="row">

  <div class="col">

    <label for="body">{{ $body_field }}</label>

    <textarea id="article-ckeditor" name="body" class="col {{ $errors->has('body') ? 'danger' : '' }}">{{ $form_for === 'course' ? $course->body : $lesson->body }}</textarea>

  </div>

</div>

@endif
