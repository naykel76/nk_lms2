{{-- if form_type = 'create' then values equal old('') --}}

@if ($form_type === 'create')


<div class="row">

  <label for="image">Image URL</label>
  <input type="text" name="image" placeholder="image URL (https://...)" value="{{ old('image') }}" />

</div>

@else

{{-- if form_for = 'course' then display for 'course' else display for 'lesson' --}}
<div class="row">
  <label for="image">Image URL</label>
  <input type="text" name="image" placeholder="Course image URL (https://...)" value="{{ $form_for === 'course' ? $course->image : $lesson->image}}" />
</div>

@if ($form_for === 'course')
<div class="row">
  <label for="price">Price</label>
  <input type="text" name="price" placeholder="Price" class="{{ $errors->has('price') ? 'danger' : '' }}" value="{{ $course->price }}" />
</div>
@endif

@endif
