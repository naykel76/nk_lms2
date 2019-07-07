{{-- if form_type = 'create' then values equal old('') --}}

<div class="row nmx">

  @if ($form_type === 'create')

  <label class="col-10 np" for="image">Image URL</label>
  <input type="text" name="image" placeholder="image URL (https://...)" class="col-40" value="{{ old('image') }}" />

  @if ($form_for === 'course')
  <label class="col-10 txt-r" for="price">Price</label>
  <input type="text" name="price" placeholder="Price" class="col-10 {{ $errors->has('price') ? 'danger' : '' }}" value="{{ old('price') }}" />
  @endif

  @else

  {{-- if form_for = 'course' then display for 'course' else display for 'lesson' --}}
  <label class="col-10 np" for="image">Image URL</label>
  <input type="text" name="image" placeholder="Course image URL (https://...)" class="col-40" value="{{ $form_for === 'course' ? $course->image : $lesson->image}}" />

  @if ($form_for === 'course')
  <label class="col-10 txt-r" for="price">Price</label>
  <input type="text" name="price" placeholder="Price" class="col-10 {{ $errors->has('price') ? 'danger' : '' }}" value="{{ $course->price }}" />
  @endif

  @endif

</div>
