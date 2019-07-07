@if ($form_type === 'create')

<div class="row nmx">

  <label class="col-10 np" for="title">{{ $title_field }}</label>
  <input type="text" name="title" placeholder="{{ $title_field }}" class="col-40 {{ $errors->has('title') ? 'danger' : '' }}" value="{{ old('title') }}" required />

  <label class="col-10 txt-r" for='slug'>URL Alias</label>
  <input class="col-40" name='slug' type="text" placeholder="Auto-generated from title" value="{{ old('slug') }}">

</div>

@else

<div class="row nmx">

  <label class="col-10 np" for="title">{{ $title_field }}</label>
  <input type="text" name="title" placeholder="{{ $title_field }}" class="col-40 {{ $errors->has('title') ? 'danger' : '' }}" value="{{ $form_for === 'course' ? $course->title : $lesson->title}}" />

  <label class="col-10 txt-r" for='slug'>URL Alias</label>
  <input class="col-40" name='slug' type="text" placeholder="Auto-generated from title" value="{{ $form_for === 'course' ? $course->slug : $lesson->slug}}">

</div>

@endif

{{-- display labels based on $form_for--}}
