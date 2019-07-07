<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>
  @include('admin.partials.navbar')
  <main id="nk-middle">
    <div class="flexCon">
      <div class="col-md-20">
      </div>
      <div class="col-md-60">
        @yield('content')
      </div>
      <div class="col-md-20">
      </div>
    </div>
  </main>
  @include('admin.partials.footer')
</body>

</html>
