@extends('admin.layouts.admin')
@section('title', $title)

@section('content')

@section('toolbar')
{{-- <a href="{{ route('admin.lessons.create') }}" class="btn success">Add New Lesson</a> --}}
<div class="pxy blue">Add lessons from the <em>course module</em> page</div>
@endsection

<table class="tbl striped">
  <thead>
    <tr>
      <th>ID #</th>
      <th>Lesson</th>
      <th class="w100">Module ID</th>
      <th class="w200 txt-ctr">Actions</th>
    </tr>
  </thead>


  @foreach ($lessons as $lesson)

  <tr>
    <td>{{ $lesson->id }}</td>
    <td>{{ $lesson->title }}</td>
    <td>{{ $lesson->course_module_id }}</td>

    <td class="txt-ctr">
      <a href="{{ route('admin.lessons.edit', $lesson->id) }}" class="btn success">Edit</a>

      <form method="POST" class="dilb" action="">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button type="submit" class="btn danger" onclick="return confirm('Are you sure?')">Delete</button>

      </form>




    </td>
  </tr>
  @endforeach




</table>

@endsection
