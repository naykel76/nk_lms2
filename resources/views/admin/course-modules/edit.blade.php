{{---------------------------------------------------------------------------
  Edit course-module form
---------------------------------------------------------------------------}}
@extends('admin.layouts.admin-3-column')

@section('title', $title)


{{-- toolbar --}}
@section('toolbar')
@component('admin.components.toolbar-edit', ['form_name' => 'edit_module'])@endcomponent
@endsection

@section('content')

<div class="container pxy-xl">

  <form id="edit_module" method="POST" action="{{ route('admin.course-modules.update', $courseModule->id) }}">

    @csrf
    @method('PATCH')

    <div class="row nmx">

      <label for="title">{{ $title_label }}</label>
      <input type="text" name="title" placeholder="{{ $title_label }}" class="{{ $errors->has('title') ? 'danger' : '' }}" value="{{ $courseModule->title }}" required />

    </div>

  </form>

</div>

@endsection
