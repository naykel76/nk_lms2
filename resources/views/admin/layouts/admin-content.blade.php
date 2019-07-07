<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>

  @include('admin.partials.navbar')

  <div class="dark px py-sm">
    <h1>{{$title}}</h1>
  </div>

  <main id="nk-middle" class="pxy">

    <div class="flexCon">

      <div class="col-md-75">
        <div class="container">

          @section('errors')
          <!-- if we have any errors -->
          @if ($errors->any())
          <div class="mb">
            <div class="bx danger">
              <ul>
                <!-- for each errors as error give me all of them -->
                @foreach ($errors->all() as $error)
                <!-- display the error -->
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
          @endif

          @show

          @yield('content')

        </div>
      </div>

      <div class="col-md-25">
        @yield('side-bar')
        @include('tasks')
      </div>

    </div>

  </main>

  @include('admin.partials.footer')

  @yield('scripts')
</body>


</html>
