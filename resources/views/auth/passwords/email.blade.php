@extends('layouts.app')

@section('content')
<div class="bx light col-50">
  <h1>Reset Password</h1>

  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
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
      <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </div>
  </form>
</div>
@endsection
