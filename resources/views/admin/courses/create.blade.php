@extends('admin.layouts.2c-ar-fluid')

@section('title', $title)

@section('content')

<form id="create_course" class="flexCon" method="POST" action="{{ route('admin.courses.store') }}">

  @csrf

  <div class="col-md-25">

    <div class="bx-primary">

      @component('admin.components.input-title', ['field_title' => 'Course Title'] )@endcomponent
      @component('admin.components.input-slug', ['field_title' => 'URL Alias'] )@endcomponent
      @component('admin.components.input-image', ['field_title' => 'Image URL'])@endcomponent
      @component('admin.components.input-headline', ['field_title' => 'Course Headline'])@endcomponent

    </div>

  </div>

  <div class="col-md-75">

    {{-- @component('admin.components.toolbar-edit', ['form_name' => 'course_edit'])@endcomponent --}}
    @component('admin.components.toolbar-create', ['form_name' => 'create_course'])@endcomponent
    @include('admin.partials.error')
    @component('admin.components.input-cke', ['field_title' => 'Course Body'])@endcomponent
    {{-- @include('admin.components.frm-cke') --}}

  </div>

</form>

@endsection
