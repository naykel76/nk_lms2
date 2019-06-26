<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head')
</head>

<body>
  @include('partials.navbar')
  @yield('top-a')
  @yield('top-b')
  <main id="nk-middle">
    <div class="container">
      @yield('content')
    </div>
  </main>
  @yield('bottom-a')
  @yield('bottom-b')
  @include('partials.footer')
</body>

</html>
