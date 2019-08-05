@extends('admin.layouts.admin-3-column')

@section('title', $title)

{{-- Add course-module model --}}
@component('components.modal', ['modalId' => 'addModule', 'modal_title' => 'Add Course Module'])
@include('admin.course-modules.create')
@endcomponent()

{{-- toolbar --}}
@section('toolbar')
@component('admin.components.toolbar-edit', ['form_name' => 'course'])@endcomponent
@endsection


@section('content')


<div class="row">

  <div class="col-md-80 npl">

    <form id="course" method="POST" action="{{ route('admin.courses.update', $course->id) }}">

      @csrf
      @method('PATCH')

      <div class="wrapper">

        <div class="row align-stretch">

          <div class="col-md-25 primary py">
            @include('admin.components.frm-title')
            @include('admin.components.frm-alias')
            @include('admin.components.frm-headline')
            @include('admin.components.frm-image')
          </div>

          <div class="col-md-75 pxy">
            @include('admin.partials.error')
            @include('admin.components.frm-cke')
          </div>

        </div>

      </div>

    </form>

  </div>

  {{-- right column --}}
  <div class="col-md-20 primary py">

    {{-- display course modules --}}
    <h2>Course Modules</h2>

    <a class="btn-success" href="#addModule">Add New Module</a>

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

  </div>
</div>



@endsection




{{-- @foreach ($courseModule->lessons as $lesson)

      <div class="pxy-sm">
        {{ $lesson->title }}
<a href="{{ route('admin.course-modules.edit', $courseModule->id) }}" class="btn sm success">Edit</a>
<button type="submit" class="btn sm danger" onclick="return confirm('Are you sure?')">Delete</button>
</div>

@endforeach --}}
