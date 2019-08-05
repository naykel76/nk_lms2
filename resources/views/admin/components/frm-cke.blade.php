@if ($form_type === 'create')

<div class="row">

  <textarea id="article-ckeditor" name="body" class="col {{ $errors->has('body') ? 'danger' : '' }}">{{ old('body') }}</textarea>

</div>

@else

<div class="row">

  <textarea id="article-ckeditor" name="body" class="col {{ $errors->has('body') ? 'danger' : '' }}">{{ $form_for === 'course' ? $course->body : $lesson->body }}</textarea>

</div>

@endif
