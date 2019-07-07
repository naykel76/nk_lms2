@extends('admin.layouts.admin-content')
@section('title', $title)


@section('content')



<form method="POST" action="{{ route('admin.lessons.update', $lesson->id) }}">

  @csrf
  @method('PATCH')

  @include('admin.partials.frm-attr-title-alias')

  @include('admin.partials.frm-attr-image-price')

  @include('admin.partials.frm-attr-body-cke')

  @include('admin.partials.frm-toolbar-edit')

  {{-- @include('admin.partials.frm-cke-edit') --}}

  {{-- @include('admin.partials.frm-toolbar-edit') --}}

</form>


{{$form_type}}
{{$form_for}}
@endsection
