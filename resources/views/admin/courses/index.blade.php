@extends('admin.layouts.admin')


@section('content')

<div class="pr-lg">

  <a href="{{ route('admin.courses.create') }}" class="btn primary">Add New</a>
  <br>
  <br>
  <style></style>
  <table>
    <thead>
      <tr>
        <th>Course</th>
        <th>Order</th>
        <th>Price</th>
        <th width="15%">Actions</th>
      </tr>

      @foreach ($courses as $course)
      <tr>
        <td>{{ $course->title }}</td>
        <td></td>
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
