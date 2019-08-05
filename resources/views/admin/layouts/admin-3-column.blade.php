<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>
  {{-- errors are handled with the error partial --}}

  {{-- the title is added in the navbar --}}
  @include('admin.partials.navbar')

  @yield('toolbar')

  @yield('content')

  @include('admin.partials.footer')

</body>

</html>
