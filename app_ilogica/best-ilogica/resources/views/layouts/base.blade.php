<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>@yield('head_title')</title>
  

  <link rel="shortcut icon" href="{{ url('/assets/favicon.png') }}" type="image/x-icon">

  <link rel="stylesheet" href="{{ url('/assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ url('/assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ url('/assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ url('/assets/css/mobster.css') }}">

</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="{{ env('APP_URL')}}">
      <img src="{{ url('/assets/favicon.png') }}" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
        {{-- var_dump($post) --}}
        {{-- var_dump($settings) --}}
        @foreach($menu as $elemento)
          <li class="nav-item">
            @if($elemento->title === 'Inicio')
              <a class="nav-link" href="{{ getenv('APP_URL')}}">{{ $elemento->title }}</a>
            @else
              <a class="nav-link" href="{{ getenv('APP_URL')  . basename($elemento->url) .'/'. basename($elemento->object_id) ?? ''}}">{{ $elemento->title }}</a>
            @endif
          </li>
        @endforeach
      </ul>

    </div>
  </div>
</nav>
  
<!-- CONTENIDO PRINCIPAL --> 

@yield('contenido-principal')



<!-- CONTENIDO PRINCIPAL END --> 







<div class="page-footer-section bg-dark fg-white">
  <div class="container">
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Pages</h5>
        <ul class="menu-link">
          <li><a href="#" class="">Features</a></li>
          <li><a href="#" class="">Customers</a></li>
          <li><a href="#" class="">Pricing</a></li>
          <li><a href="#" class="">GDPR</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Company</h5>
        <ul class="menu-link">
          <li><a href="#" class="">About</a></li>
          <li><a href="#" class="">Team</a></li>
          <li><a href="#" class="">Leadership</a></li>
          <li><a href="#" class="">Careers</a></li>
          <li><a href="#" class="">HIRING!</a></li>
        </ul>
      </div>


    </div>
  </div>



</div>

<script src="{{ url('/assets/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ url('/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ url('/assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ url('/assets/js/mobster.js') }}"></script>

</body>
</html>
