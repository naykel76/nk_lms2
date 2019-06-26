<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>
  @include('admin.partials.navbar')
  <main id="nk-middle">
    <div class="flexCon">
      <div class="col-md-20 light">
        <div class="nav" style="margin-left: -1rem; margin-right: -1rem;">
          <li><a href="{{ route('admin.courses.index') }}">Courses</a></li>
        </div>
      </div>
      <div class="col-md-60 ml">
        @yield('content')
      </div>
    </div>
  </main>
  @include('admin.partials.footer')
</body>

</html>
