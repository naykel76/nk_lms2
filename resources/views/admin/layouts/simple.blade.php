<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>

  @include('admin.partials.navbar')

  {{-- errors are handled with the error partial --}}

  @yield('content')

  @include('admin.partials.footer')

</body>

</html>
