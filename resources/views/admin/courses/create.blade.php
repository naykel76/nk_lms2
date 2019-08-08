@extends('admin.layouts.admin-3-column')

@section('title', $title)



@section('content')

{{-- toolbar --}}
@section('toolbar')
@component('admin.components.toolbar-create', ['form_name' => 'create_course'])@endcomponent
@endsection

<form id="create_course" class="nm" method="POST" action="{{ route('admin.courses.store') }}">
  {{-- <form id="create_course" class="nm" method="POST" action="/admin/courses/store"> --}}

  @csrf
  <div class="wrapper">

    <div class="row align-stretch">

      <div class="col-md-25 primary py">

        <h2>Course Details</h2>

        @component('admin.components.input-title', ['field_title' => $field_title] )@endcomponent

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

@endsection
