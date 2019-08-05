<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.head')
</head>

<body>
  @include('admin.partials.navbar')

  @yield('top-a')
  @yield('top-b')

  <div id="nk-middle" class="np">

    <div class="wrapper mt">

      <div class="row">

        <aside id="nk-left" class="col-sm-25 col-lg-20">

          <div class="row-nma">
            @include('admin.partials.nav-admin')
          </div>

        </aside>

        <main id="nk-content" class="col-sm-75 col-lg-80">

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

          {{-- do not add any special classes here because different layouts use different styles --}}
          <div id="toolbar" class="row">
            @yield('toolbar')
          </div>


          @yield('content')

        </main>

      </div>

    </div>

  </div>

  @yield('bottom-a')
  @yield('bottom-b')

  @include('admin.partials.footer')

</body>

</html>
