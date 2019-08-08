<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head')
</head>

<body>

  @include('admin.partials.navbar')


  <div id="nk-middle" class="py-md">
    <div class="wrapper">
      <div class="row">

        {{-- sidebar content --}}
        <div class="col-md-20">
          @yield('aside')
        </div>

        {{-- main content needs 'np' to align correctly --}}
        <div class="col-md-80">
          @yield('content')
        </div>

      </div>
    </div>
  </div>

  @include('admin.partials.footer')

  {{--




  --}}
</body>

</html>
