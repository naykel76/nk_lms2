@extends('admin.layouts.admin')


@section('content')

<div class="pr-lg">

  <a href="{{ route('admin.courses.create') }}" class="btn primary">Add New</a>
  <br>
  <br>
  <table>
    <thead>
      <tr>
        <th>Course</th>
        <th>Alias</th>
        <th>Price</th>
        <th class="w200">Actions</th>
      </tr>

      @foreach ($courses as $course)
      <tr>
        <td>{{ $course->title }}</td>
        <td>{{ $course->slug }}</td>
        <td>{{ $course->price }}</td>
        <td>
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
</div>

@endsection
