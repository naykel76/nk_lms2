@extends('admin.layouts.2c-ar-fluid')

@section('title', $title)

{{-- Add lesson to module --}}
@component('components.modal', ['modalId' => 'addLesson', 'modal_title' => 'Create New Lesson'])
@include('admin.lessons.create')
@endcomponent()


{{-- main content --}}
@section('content')

{{-- Edit the course-module --}}
<form id="edit_module" class="flexCon" method="POST" action="{{ route('admin.course-modules.update', $courseModule->id) }}">

  @csrf
  @method('PATCH')

  <div class="col-md-25"></div>

  <div class="col-md-75">

    @include('admin.partials.error')

    <div class="row">

      <label for="title">{{ $title_label }}</label>
      <input type="text" name="title" placeholder="{{ $title_label }}" class="{{ $errors->has('title') ? 'danger' : '' }}" value="{{ $courseModule->title }}" required />

    </div>
    {{-- @component('admin.components.toolbar-edit', ['form_name' => 'course_edit'])@endcomponent --}}

    <input type="submit">
  </div>

</form>

@endsection

{{-- sidebar --}}
@section('aside')

<h2>Lessons</h2>

{{-- add lesson to course-module --}}
<a class="btn-success" href="#addLesson">Add New Lesson</a>

@foreach ($courseModule->lessons as $lesson)
<div class="bx">
  {{ $lesson->title }}

  {{-- display module lessons --}}
  <div class="lessons-list-container mt">

    <form method="POST" action="{{ route('admin.lessons.destroy', $lesson->id) }}">
      @csrf
      @method('DELETE')

      <div class="row">

        <div class="col" style="flex-grow: 1;">
          <a href="{{ route('admin.course-modules.edit', $lesson->id) }}">{{ $lesson->title }}</a>
        </div>

        <div class="col" style="flex-grow: 0;">
          <button type="submit" class="btn-danger sm" onclick="return confirm('Are you sure?')">Delete</button>
        </div>
      </div>

    </form>
  </div>
</div>

@endforeach

@endsection
