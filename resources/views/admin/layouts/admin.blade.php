<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>
  @include('admin.partials.navbar')
  <main id="nk-middle">
    <div class="flexCon">
      <div class="col-md-20 bx">
        <div class="nav" style="margin-left: -1rem; margin-right: -1rem;">
          <li><a href="{{ route('admin.courses.index') }}">Courses</a></li>
          <li><a href="{{ route('admin.lessons.index') }}">Lessons</a></li>
        </div>
      </div>
      <div class="col-md-60">
        @yield('content')
      </div>
      <div class="col-md-20">
        <div class="danger bx">
          meta information
        </div>
      </div>
    </div>
  </main>
  @include('admin.partials.footer')
</body>

</html>
