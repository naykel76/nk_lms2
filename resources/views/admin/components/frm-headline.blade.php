{{-- Select value base on form_type (create|edit) --}}


<div class="row">

  <label for="headline">Course headline</label>

  <textarea name="headline" rows="3" placeholder="Enter course headline ...">{{ $form_type === 'create' ? old('headline') :  $course->headline }}</textarea>

</div>
