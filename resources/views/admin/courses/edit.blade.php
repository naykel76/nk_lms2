@extends('admin.layouts.admin-content')
@section('title', $title)

@section('content')


<div class="px">
  <div class="bx mb">
    <form method="POST" action="{{ route('admin.courses.update', $course->id) }}">

      @csrf
      @method('PATCH')

      <div class="row">
        <div class="col-md-80">
          <label for="title">Course Title</label>
          <input type="text" name="title" placeholder="Course title" value="{{ $course->title}}" />
        </div>

        <div class="col-md-20">
          <label for="price">Price</label>
          <input type="text" name="price" placeholder="Price" value="{{ $course->price}}" />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="slug">Course URL Alias</label>
          <input type="text" name="slug" placeholder="URL Alias" value="{{ $course->slug}}" />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="description">Course Description</label>
          <textarea name="description">{{ $course->description }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <button type="submit" class="btn-primary">Update</button>
        </div>
      </div>

    </form>
  </div>

</div>

@endsection

@section('side-bar')
<table>
  <thead>
    <tr>
      <th>Lesson</th>
      <th width="15%" class="txt-ctr">Actions</th>
    </tr>

    @foreach ($course->lessons as $lesson)
    <tr>
      <td>{{ $lesson->title }}</td>
      <td class="txt-ctr">
        <a href="{{ route('admin.lessons.edit', $lesson->id) }}" class="btn sm success">Edit</a>

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
