@extends('admin.layouts.admin')
@section('title', $title)

@section('content')

@section('toolbar')
<a href="{{ route('admin.courses.create') }}" class="btn-success">Add New Course</a>
@endsection

<table class="tbl striped">
  <thead>
    <tr>
      <th>ID #</th>
      <th>Course</th>
      <th class="w100">Price</th>
      <th class="w100">Order</th>
      <th class="w200 txt-ctr">Actions</th>
    </tr>
  </thead>

  @foreach ($courses as $course)
  <tr>
    <td>{{ $course->id }}</td>
    <td>{{ $course->title }}</td>
    <td>{{ $course->price }}</td>
    <td></td>
    <td class="txt-ctr">

      <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn success">Edit</a>

      <form method="POST" class="dilb" action="{{ route('admin.courses.destroy', $course->id) }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button type="submit" class="btn-danger" onclick="return confirm('Are you sure?')">Delete</button>

      </form>

    </td>
  </tr>
  @endforeach

</table>
</div>
@endsection
