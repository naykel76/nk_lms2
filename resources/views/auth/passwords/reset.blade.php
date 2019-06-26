@extends('layouts.app')

@section('content')

<h1>Reset Password</h1>

<div class="bx light col-50">
  <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="frm-row">
      <label for="email">{{ __('E-Mail Address') }}</label>

      <div class=" col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="frm-row">
      <label for="password">{{ __('Password') }}</label>

      <div class=" col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="frm-row">
      <label for="password-confirm">{{ __('Confirm Password') }}</label>

      <div class=" col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
    </div>

    <div class="frm-row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Reset Password') }}
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
