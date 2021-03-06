<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>

  @include('admin.partials.navbar')

  <div id="nk-middle" class="py-md">

    <div class="wrapper">

      <div class="row">

        {{-- sidebar content --}}
        <div class="col-md-20">

          @include('admin.partials.nav-admin')

        </div>

        {{-- main content --}}
        <div class="col-md-80">

          {{-- NOTE: this is a free type section, not a component  --}}
          <div id="toolbar" class="mb">
            @yield('toolbar')
          </div>

          @yield('content')

        </div>

      </div>

    </div>

  </div>

  @include('admin.partials.footer')

</body>

</html>
