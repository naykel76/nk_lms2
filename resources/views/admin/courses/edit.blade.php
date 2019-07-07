@extends('admin.layouts.admin-content')
@section('title', $title)

@section('toolbar')
<div class="toolbar ">
  <h1 class="my">{{ $title }}</h1>
</div>
@endsection

@section('content')

<form id="frm" method="POST" action="{{ route('admin.courses.update', $course->id) }}">

  @csrf
  @method('PATCH')

  @include('admin.partials.frm-attr-title-alias')

  @include('admin.partials.frm-attr-headline')

  @include('admin.partials.frm-attr-image-price')

  @include('admin.partials.frm-attr-body-cke')

  @include('admin.partials.frm-toolbar-edit')

</form>

@endsection

@section('side-bar')

{{-- Add new lesson --}}
<form method="POST" action="/admin/courses/{{ $course->id }}/lessons" class="light pxy-sm mb">

  <h3>Add New Lesson</h3>

  @csrf

  <div class="frm-row">
    <input name='title' type="text" placeholder="Enter Lesson Title">
  </div>

  <div class="frm-row">
    <button type="submit" class="btn success sm">Create Lesson</button>
  </div>

</form>



<h3>Lessons</h3>

@foreach ($course->lessons as $lesson)

<div class="pxy-sm bdr">
  {{ $lesson->title }}
  <br>

  <form method="POST" class="txt-r" action="{{ route('admin.lessons.destroy', $lesson->id) }}">

    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    <a href="{{ route('admin.lessons.edit', [$lesson->id]) }}" class="btn sm success">Edit</a>

    <button type="submit" class="btn sm danger" onclick="return confirm('Are you sure?')">Delete</button>

  </form>
</div>

@endforeach

@endsection
