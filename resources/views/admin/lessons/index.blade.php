@extends('admin.layouts.admin')
@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<div class="pr-lg">

  <a href="{{ route('admin.lessons.create') }}" class="btn primary">Add New</a>
  <br>
  <br>
  <style></style>
  <table>
    <thead>
      <tr>
        <th>Course</th>
        <th>Order</th>
        <th width="15%">Actions</th>
      </tr>

      @foreach ($lessons as $lesson)
      <tr>
        <td>{{ $lesson->title }}</td>

        <td> </td>

        <td>
          <a href="{{ route('admin.lessons.edit', $lesson->id) }}" class="btn sm success">Edit</a>

          <form method="POST" class="dilb" action="{{ route('admin.lessons.destroy', $lesson->id) }}">

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
