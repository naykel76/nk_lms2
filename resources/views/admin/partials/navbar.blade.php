<div id="nk-navbar">

  <style>
    .navbar-title {
      font-size: 2rem;
      line-height: 1.2;
      font-weight: 700
    }
  </style>

  <div class="navbar">

    <div class="flexCon">
      <a href="/" class="logo pr" style="border-right: 1px solid #eee;"><img src="{{ url('logo.svg') }}" height="40" alt="NAYKEL"></a>
      <div class="navbar-title pl">{{ $title }}</div>
    </div>
    <div class="flexCon align-m">
      <nav class="nav">
        <a href="{{  route('admin.courses.index') }}">Courses</a>
        <a href="{{  route('admin.lessons.index') }}">Lessons</a>
      </nav>

      <!-- Authentication Links -->
      @guest
      <a class="pxy" href="{{ route('login') }}">{{ __('Login') }}</a>

      @if (Route::has('register'))
      <a class="pxy" href="{{ route('register') }}">{{ __('Register') }}</a>
      @endif

      @else
      <a class="ml" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @endguest
    </div>
  </div>


</div>
