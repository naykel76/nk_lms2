<div class="flexCon align-m d-md-up hide">
  <nav class="nav">
    <a href="admin/courses">Admin</a>
    <a href="https://github.com/naykel76/nk_lms.git" _target="blank">GitHub</a>
    <!-- Authentication Links -->
    @guest
    <a href="{{ route('login') }}">{{ __('Login') }}</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">{{ __('Register') }}</a>
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
  </nav>
</div>
