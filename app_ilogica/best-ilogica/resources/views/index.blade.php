@extends('layouts.base')

@section('head_title', $settings->title)

@section('contenido-principal')
@foreach($post as $p)
  @foreach(explode(';;', $p->content->rendered) as $separada)
    @php ($elementos[] = $separada)
  @endforeach
@endforeach
<div class="page-hero-section bg-image hero-home-1" style="background-image: url({{ url('/assets/img/bg_hero_1.svg') }} );">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge mb-2"><span class="icon mr-1"><span class="mai-globe"></span></span> #2 Nominado a los premios "Madrugé para desarrollar esto"</div>
          <h1 class="mb-4">{{ str_replace('<h2>', '', $elementos[0]) }}</h1>
          <p class="mb-4">{{ str_replace('<p>', '', str_replace('</h2>', '', $elementos[1])) }}</p>
          @foreach($menu as $elemento)
          
            @if($elemento->title === 'Descargar')
              <a href="{{ getenv('APP_URL')  . basename($elemento->url) .'/'. basename($elemento->object_id) ?? ''}}" class="btn btn-primary rounded-pill">Descargar</a>
            @endif

          @endforeach
          
        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="{{ url('/assets/img/app_preview_1.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class="page-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="{{ url('/assets/img/clients/alter_sport.png') }}" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="{{ url('/assets/img/clients/cleaning_service.png') }}" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="{{ url('/assets/img/clients/creative_photo.png') }}" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="{{ url('/assets/img/clients/global_tv.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div> <!-- End clients -->

<div class="position-realive bg-image" style="background-image: url({{ url('/assets/img/pattern_1.svg') }});">

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 py-3">
          <div class="img-place mobile-preview shadow wow zoomIn">
            <img src="{{ url('/assets/img/app_preview_2.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 mt-lg-5">
          <div class="iconic-list">
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                <span class="mai-cube"></span>
              </div>
              <div class="iconic-content">
                <h5>{{ $elementos[3] }}</h5>
                <p class="fs-small">{{ $elementos[5] }}</p>
              </div>
            </div>
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
                <span class="mai-shield"></span>
              </div>
              <div class="iconic-content">
                <h5>{{ $elementos[7] }}</h5>
                <p class="fs-small">{{ $elementos[9] }}</p>
              </div>
            </div>
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                <span class="mai-desktop-outline"></span>
              </div>
              <div class="iconic-content">
                <h5>{{ $elementos[11] }}</h5>
                <p class="fs-small">{{ $elementos[13] }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection


