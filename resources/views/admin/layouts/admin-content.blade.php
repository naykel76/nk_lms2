<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>
  @include('admin.partials.navbar')
  @yield('top-a')
  <main id="nk-middle">
    <div class="flexCon">
      <div class="col-md-75">
        @yield('content')
      </div>
      <div class="col-md-25">
        @yield('side-bar')
      </div>
    </div>
  </main>
  @include('admin.partials.footer')
</body>

</html>
