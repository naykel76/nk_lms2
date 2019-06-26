<div id="nk-navbar">
  <div class="navbar">
    <div class="light" style="border:0;">
      <a href="/" class="logo"><img src="{{ url('logo.svg') }}" height="40" alt="NAYKEL"></a>

    </div>

    <div class="flexCon align-m">
      <h2>LMS</h2>
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
<div class="drawer-toggle btn h-md" onclick="openDrawer()">
  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
    <path d="M0 23.333h32V27H0zM0 14.166h32v3.667H0zM0 5h32v3.667H0z" />
  </svg>
</div>

<div id="drawer">

  <div class="bx">

    <div class="btn" onclick="openDrawer()">&times;</div>

  </div>

</div>
