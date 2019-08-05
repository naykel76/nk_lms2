<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head')
</head>

<body>
  @include('partials.navbar')

  @yield('top-a')
  @yield('top-b')

  <div id="nk-middle" class="np">

    <div class="wrapper">

      <div class="row">

        <aside id="nk-left" class="col-sm-25 col-lg-20 py-md">
          @yield('left-column')
        </aside>

        <main id="nk-content" class="col-sm-75 col-lg-80 py-md">
          @yield('content')
        </main>

      </div>

    </div>

  </div>

  @yield('bottom-a')
  @yield('bottom-b')

  @include('partials.footer')

</body>

</html>
