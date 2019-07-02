@extends('admin.layouts.admin-content')
@section('title', $title)

@section('top-a')
<div class="pxy light">
  {{-- <a href="" class="btn-primary">Add Lesson</a> --}}
  <a href="{{ route('admin.lessons.store') }}" class="btn success">Save and Close</a>
  <a href="" class="btn">
    <span class="danger">&times;</span> close
  </a>
</div>
@endsection

@section('content')

<h1>{{ $title }}</h1>

<form method="POST" action="{{ route('admin.lessons.create') }}">

  <div class="row">
    <label class="col-stf" for='lesson_title'>Lesson Title</label>
    <input class="col" name='lesson_title' type="text" placeholder="Lesson Title">

    <label class="col-stf" for='lesson_slug'>URL Alias</label>
    <input class="col" name='lesson_slug' type="text" placeholder="URL Alias">
  </div>

  <div class="row">
    <label class="col-stf" for='lesson_body'>Lesson Body</label>
    <input class="col" name='lesson_body' type="text" placeholder="Lesson Body">
  </div>

  <div class="row">
    <label class="col-stf" for='lesson_image'>Image</label>
    <input class="col" name='lesson_image' type="text" placeholder="Image">
  </div>

</form>
@endsection
