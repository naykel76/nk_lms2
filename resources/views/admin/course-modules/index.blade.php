@extends('admin.layouts.admin')
@section('title', $title)

@section('content')

<table class="tbl striped">
  <thead>
    <tr>
      <th>ID #</th>
      <th>Module</th>
      <th class="w100">CourseId</th>
      <th class="w100">Order</th>
      <th class="w200 txt-ctr">Actions</th>
    </tr>
  </thead>

  @foreach ($modules as $module)
  <tr>
    <td>{{ $module->id }}</td>
    <td>{{ $module->title }}</td>
    <td>{{ $module->course_id }}</td>
    <td></td>
    <td class="txt-ctr">

      <a href="{{ route('admin.course-modules.edit', $module->id) }}" class="btn success">Edit</a>

      <form method="POST" class="dilb" action="{{ route('admin.course-modules.destroy', $module->id) }}">

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
