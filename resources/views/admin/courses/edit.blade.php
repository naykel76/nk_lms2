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

{{-- add new course module --}}
<form method="POST" action="/admin/courses/{{ $course->id }}/course-modules" class="light pxy-sm mb">

  @csrf

  <div class="frm-row">

    <input type="text" name="module_title" placeholder="Enter course module" class="{{ $errors->has('module_title') ? 'danger' : '' }}">

  </div>

  <div class="frm-row">

    <button type="submit" class="btn success">Add New Module</button>

  </div>

</form>



{{-- display course modules --}}
<h2>Course Modules</h2>

@if ($course->courseModules->count())

@foreach ($course->courseModules as $courseModule)

<div class="flexCon pxy light">

  {{ $courseModule->title }}

  <form method="POST" class="txt-r" action="{{ route('admin.course-modules.destroy', $courseModule->id) }}">

    {{ method_field('DELETE') }}

    {{ csrf_field() }}

    {{-- Edit course model --}}
    <a href="{{ route('admin.course-modules.edit', $courseModule->id) }}" class="btn sm success">Edit</a>

    {{-- delete course module --}}
    <button type="submit" class="btn sm danger" onclick="return confirm('Are you sure?')">Delete</button>
    <hr>
    <div class="px">Lessons</div>

  </form>

</div>

@endforeach

@endif

{{-- <h3>Lessons</h3>

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

@endforeach --}}

@endsection
