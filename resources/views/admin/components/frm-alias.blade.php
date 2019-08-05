@if ($form_type === 'create')

<div class="row">

  <label for='slug'>URL Alias</label>
  <input name='slug' type="text" placeholder="Auto-generated from title" value="{{ old('slug') }}">

</div>

@else

<div class="row">

  <label for='slug'>URL Alias</label>
  <input name='slug' type="text" placeholder="Auto-generated from title" value="{{ $form_for === 'course' ? $course->slug : $lesson->slug}}">

</div>

@endif

{{-- display labels based on $form_for--}}
