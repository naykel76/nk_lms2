@extends('layouts.app')

@section('content')
<div class="bx light col-50">
  <h1>Login</h1>
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="frm-row">
      <label for="email">{{ __('E-Mail Address') }}</label>
      <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="frm-row">
      <label for="password">{{ __('Password') }}</label>
      <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="frm-row">
      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      <label for="remember">Remember Me</label>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>

    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
    @endif
  </form>
</div>

@endsection
