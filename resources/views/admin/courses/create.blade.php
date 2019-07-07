@extends('admin.layouts.admin-content')
@section('title', $title)

@section('toolbar')
@include('admin.partials.frm-toolbar-create')
@endsection

@section('content')


<form id="frm" method="POST" action="{{ route('admin.courses.store') }}">

  @csrf

  @include('admin.partials.frm-attr-title-alias')

  @include('admin.partials.frm-attr-headline')

  @include('admin.partials.frm-attr-image-price')

  @include('admin.partials.frm-attr-body-cke')

  @include('admin.partials.frm-toolbar-create')

</form>


@endsection


@section('side-bar')
<div class="bx danger">
  <div class="bx-title mb">To Do's</div>
  <ul>
    <li>Image picker</li>
    <li>Meta fields</li>
  </ul>
</div>

@endsection
