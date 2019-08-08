{{---------------------------------------------------------------------------
  Reusable Component for 'title' input for create and edit forms

  - database field to be called 'title'

  Requires
  $field_title, used for label and place holder
  $input_value used for input value or 'old'

  @component('admin.components.input-title', ['field_title' => $field_title] )@endcomponent
  @component('admin.components.input-title', ['field_title' => $field_title, 'input_value' => $course->title] )@endcomponent
---------------------------------------------------------------------------}}



<div class="row">

  <label for="title">{{ $field_title }}</label>
  <input type="text" name="title" placeholder="Enter {{ $field_title }}" class="{{ $errors->has('title') ? 'danger' : '' }}"
    value="{{ $input_value ?? old('title') }}" required />

</div>
