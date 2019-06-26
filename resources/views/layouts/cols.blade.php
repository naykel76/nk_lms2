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
    <div class="row">
      <aside class="col-md-20">
        {{-- @include('') --}}

        @section('nav')
        this is the Nav
        @show

      </aside>
      <main class="col-md-60">
        <div class="container">
          @yield('content')
        </div>
      </main>
    </div>
  </main>
  @yield('bottom-a')
  @yield('bottom-b')

  @include('partials.footer')

</body>

</html>
