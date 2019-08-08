@extends('admin.layouts.2c-ar-fluid')

@section('title', $title)

{{-- Add course-module model --}}
{{-- @component('components.modal', ['modalId' => 'addModule', 'modal_title' => 'Add Course Module'])
@include('admin.course-modules.create')
@endcomponent() --}}

@section('content')


<form id="course_edit" class="flexCon" method="POST" action="{{ route('admin.courses.update', $course->id) }}">

  @csrf
  @method('PATCH')

  <div class="col-md-25">

    <div class="bx-primary">

      @include('admin.components.frm-title')
      @include('admin.components.frm-alias')
      @include('admin.components.frm-headline')
      @include('admin.components.frm-image')

    </div>

  </div>

  <div class="col-md-75">

    @component('admin.components.toolbar-edit', ['form_name' => 'course_edit'])@endcomponent

    @include('admin.partials.error')
    @include('admin.components.frm-cke')
    <br>
    @component('admin.components.toolbar-edit', ['form_name' => 'course_edit'])@endcomponent
  </div>


</form>

@endsection


@section('aside')
<h2>Course Modules</h2>

{{-- add course module --}}
<a class="btn-success" href="#addModule">Add New Module</a>

{{-- display course modules --}}
<div class="modules-list-container mt">

  @forelse ($course->courseModules as $courseModule)

  <form method="POST" class="light nm py" action="{{ route('admin.course-modules.destroy', $courseModule->id) }}">

    @csrf
    @method('DELETE')

    <div class="row">

      {{-- Edit course modal --}}
      <div class="col" style="flex-grow: 1;">
        <a href="{{ route('admin.course-modules.edit', $courseModule->id) }}">{{ $courseModule->title }}</a>
      </div>

      {{-- delete course-module --}}
      <div class="col" style="flex-grow: 0;">
        <button type="submit" class="btn-danger sm" onclick="return confirm('Are you sure?')">Delete</button>
      </div>
    </div>

  </form>

  @empty

  <p>This course has no modules</p>

  @endforelse
</div>
@endsection
