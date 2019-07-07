<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  @include('partials.head')

</head>

<body>

  @include('partials.navbar')

  <main id="nk-middle">

    <div class="container">

      <div class="row">
        <div class="col-md-70">

          <h1 class="title">{{ $lesson->title }}</h1>

          {!! $lesson->body !!}

        </div>

        <div class="col-md-30">

          <h2>Lessons Navigation</h2>

        </div>
      </div>

    </div>

  </main>

  @include('partials.footer')

</body>

</html>
