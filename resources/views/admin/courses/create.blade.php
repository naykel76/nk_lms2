@extends('admin.layouts.admin')
@section('title', $title)



@section('content')

<form method="POST" action="{{ route('admin.courses.store') }}">

  @csrf

  <div class="frm-row flexCon">
    <div class="col-md-80">
      <label for="title">Course Title</label>
      <input type="text" name="title" placeholder="Course title" />
    </div>

    <div class="col-md-20">
      <label for="price">Price</label>
      <input type="text" name="price" placeholder="Price" />
    </div>
  </div>

  <div class="frm-row flexCon">
    <div class="col">
      <label for="description">Course Description</label>
      <textarea name="description"></textarea>
    </div>
  </div>

  <div class="frm-row flexCon">
    <div class="col">
      <button type="submit" class="btn-primary">Add Course</button>
    </div>
  </div>

</form>

@endsection
