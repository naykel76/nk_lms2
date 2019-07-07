@extends('admin.layouts.admin')
@section('title', $title)

@section('content')

<div class="row align-baseline">

  <div class="col">
    <h1>{{$title}}</h1>
  </div>

  <div class="col txt-r">
    <a href="{{ route('admin.courses.create') }}" class="btn primary">Add New Course</a>
  </div>

</div>

<table>
  <thead>
    <tr>
      <th>Course</th>
      <th class="w100">Price</th>
      <th class="w150 txt-ctr">Actions</th>
    </tr>

    @foreach ($courses as $course)
    <tr>
      <td>{{ $course->title }}</td>
      <td>{{ $course->price }}</td>
      <td class="txt-ctr">
        <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn sm success">Edit</a>

        <form method="POST" class="dilb" action="{{ route('admin.courses.destroy', $course->id) }}">

          {{ method_field('DELETE') }}
          {{ csrf_field() }}

          <button type="submit" class="btn sm danger" onclick="return confirm('Are you sure?')">Delete</button>

        </form>

      </td>
    </tr>
    @endforeach

  </thead>
</table>
@endsection
