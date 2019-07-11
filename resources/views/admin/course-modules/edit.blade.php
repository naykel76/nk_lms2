@extends('admin.layouts.admin-content')
@section('title', $title)

@section('toolbar')
<div class="toolbar ">
  <h1 class="my">{{ $title }}</h1>
</div>
@endsection

@section('content')
<form id="frm" method="POST" action="{{ route('admin.course-modules.update', $courseModule->id) }}">

  @csrf
  @method('PATCH')

  <div class="row nmx">

    <label class="col-10 np" for="title">{{ $title_label }}</label>
    <input type="text" name="title" placeholder="{{ $title_label }}" class="col-40 {{ $errors->has('title') ? 'danger' : '' }}" value="{{ $courseModule->title }}" required />

    <label class="col-10 txt-r" for='slug'>URL Alias</label>
    <input class="col-40" name='slug' type="text" placeholder="Auto-generated from title" value="{{ $courseModule->slug }}">

  </div>

  <div class="row">

    <div class="col">

      <button class="btn success" type="submit" name="action" value="save">Save</button>

      <button class="btn" type="submit" name="action" value="save_close">Save and Close</button>

      <button class="btn danger" type="submit" name="action" value="cancel">Cancel</button>

    </div>

  </div>


</form>

@endsection

@section('side-bar')

<h3>Lessons</h3>




{{--

@foreach ($course->lessons as $lesson)

<div class="pxy-sm bdr">
  {{ $lesson->title }}
<br>

<form method="POST" class="txt-r" action="{{ route('admin.lessons.destroy', $lesson->id) }}">

  {{ method_field('DELETE') }}
  {{ csrf_field() }}

  <a href="{{ route('admin.lessons.edit', [$lesson->id]) }}" class="btn sm success">Edit</a>

  <button type="submit" class="btn sm danger" onclick="return confirm('Are you sure?')">Delete</button>

</form>
</div>

@endforeach --}}

@endsection
