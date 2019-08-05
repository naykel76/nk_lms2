@extends('admin.layouts.admin-content')
@section('title', $title)

@section('toolbar')
@include('admin.components.frm-toolbar-create')
@endsection

@section('content')

<form method="POST" action="{{ route('admin.lessons.store') }}">

  @csrf


  @include('admin.partials.frm-title-alias-new')

  @include('admin.partials.frm-cke-new')

  <div class="row">
    <div class="col">
      <button class="btn-success" type="submit" name="action" value="save">Create Lesson</button>
      <button class="btn-danger" type="submit" name="action" value="cancel">Cancel</button>
    </div>
  </div>
</form>
@endsection
