<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head')
</head>

<body class="course">
  @include('partials.navbar')

  <div class="section dark">
    <div class="container">
      <div class="row">
        <div class="col-md-70">
          <h1 class="title">{{ $course->title }}</h1>
          <div class="headline">{{ $course->headline }}</div>
        </div>
        <div class="col-md-30">
          <div class="pos-abs" style="width: 100%;">
            <div class="bx light">
              <div class="txt-ctr warning py-lg">
                <img src="{{  $course->image }}" alt="Course Image">
              </div>
              <div class="price mt">${{ $course->price }}</div>
              <button class="btn-primary lg dis-blk my" style="width: 100%;">Buy Now</button>
              <ul style="margin-left: -15px;">
                <h5 style="margin-left: -25px;">This Course Includes</h5>
                <li>Simple and effective</li>
                <li>24 Hour Access</li>
                <li>Moneyback Guarantee</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @yield('top-b')
  <main id="nk-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-70">
          {!! $course->description !!}


          <div class="bx light">
            <h2>What you will learn</h2>
            <ul class="lst-icon">
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, quas.</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quis?</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
                aliquam.</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, veniam.</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam,
                accusamus!</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, veniam.</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ad.</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
                laboriosam?</li>
              <li><i class="icon-check txt-green"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium,
                assumenda.</li>
            </ul>
          </div>


        </div>
      </div>
    </div>
  </main>
  @yield('bottom-a')
  @yield('bottom-b')
  @include('partials.footer')
</body>

</html>
