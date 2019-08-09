@extends('admin.layouts.2c-ar-fluid')

@section('title', $title)

{{-- Add module model --}}
@component('components.modal', ['modalId' => 'addModule', 'modal_title' => 'Add Course Module'])
@include('admin.modules.create')
@endcomponent()

@section('content')


<form id="course_edit" class="flexCon" method="POST" action="{{ route('admin.courses.update', $course->id) }}">

  @csrf
  @method('PATCH')

  <div class="col-md-25">

    <div class="bx-primary">

      @component('admin.components.input-title', ['field_title' => 'Course Title', 'input_value' => $course->title])@endcomponent
      @component('admin.components.input-slug', ['field_title' => 'URL Alias', 'input_value' => $course->slug])@endcomponent
      @component('admin.components.input-image', ['field_title' => 'Image URL','input_value' => $course->image])@endcomponent
      @component('admin.components.input-headline', ['field_title' => 'Course Headline','input_value' => $course->headline])@endcomponent

    </div>

  </div>

  <div class="col-md-75">

    @component('admin.components.toolbar-edit', ['form_name' => 'course_edit'])@endcomponent
    @include('admin.partials.error')
    @component('admin.components.input-cke', ['field_title' => 'TitleLabel','input_value' => $course->body])@endcomponent

  </div>


</form>

@endsection


@section('aside')
<h2>Course Modules</h2>

{{-- add course module --}}
<a class="btn-success" href="#addModule">Add New Module</a>

{{-- display course modules --}}
<div class="modules-list-container mt">

  @forelse ($course->modules as $module)

  <form method="POST" class="light nm py" action="{{ route('admin.modules.destroy', $module->id) }}">

    @csrf
    @method('DELETE')

    <div class="row">

      {{-- Edit course modal --}}
      <div class="col" style="flex-grow: 1;">
        <a href="{{ route('admin.modules.edit', $module->id) }}">{{ $module->title }}</a>
      </div>

      {{-- delete module --}}
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
