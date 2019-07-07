{{-- Select value base on form_type (create|edit) --}}


<div class="row nmx">

  <label class="col-10 np" for="headline">Course headline</label>
  <input type="text" name="headline" placeholder="Enter course headline" class=" col-90" value="{{ $form_type === 'create' ? old('headline') :  $course->headline }}" />

</div>
