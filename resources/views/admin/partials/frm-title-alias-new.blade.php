<div class="row">

  <label class="col-10 np" for="title">{{ $input_title }}</label>
  <input type="text" name="title" placeholder="{{ $input_title }}" class="col-40 {{ $errors->has('title') ? 'danger' : '' }}"
    value="{{ old('title') }}" required />

  <label class="col-10 txt-r" for='slug'>URL Alias</label>
  <input class="col-40" name='slug' type="text" placeholder="Auto-generated from title" value="{{ old('slug') }}">

</div>
