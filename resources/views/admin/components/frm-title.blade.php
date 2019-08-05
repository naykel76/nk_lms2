@if ($form_type === 'create')

<div class="row">

  <label for="title">{{ $title_field }}</label>
  <input type="text" name="title" placeholder="{{ $title_field }}" class="{{ $errors->has('title') ? 'danger' : '' }}" value="{{ old('title') }}" required />

</div>

@else <div class="row">

  <label for="title">{{ $title_field }}</label>
  <input type="text" name="title" placeholder="{{ $title_field }}" class="{{ $errors->has('title') ? 'danger' : '' }}" value="{{ $form_for === 'course' ? $course->title : $lesson->title}}" />

</div>

@endif
