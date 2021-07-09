@extends('layouts.base')

@section('head_title', $settings->title)

@foreach($post as $p)
  @foreach(explode(';;', $p->title->rendered) as $title)
    @php ($postTitle = $title)
  @endforeach
  
  @php ($postContent = $p->content->rendered)

@endforeach

@section('contenido-principal')
<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">{{ $postTitle}}</h3>
            @if($postTitle != 'Contacto')
              {!! $postContent !!}
            @endif
          </div>
         
        </div>
        
      </div>
    </div>
  </div>

  @if($postTitle === 'Contacto')
    @foreach($post as $p)
      @foreach(explode(';;', $p->content->rendered) as $separada)
        @php ($elementos[] = $separada)
      @endforeach
    @endforeach
    <div class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 my-3 wow fadeInUp">
            <div class="card-page">
              <div class="row row-beam-md">
                <div class="col-md-4 text-center py-3 py-md-2">
                  <i class="mai-location-outline h3"></i>
                  <p class="fg-primary fw-medium fs-vlarge">{{ $elementos[1] }}</p>
                  <p class="mb-0">{!! $elementos[3] !!}</p>
                </div>
                <div class="col-md-4 text-center py-3 py-md-2">
                  <i class="mai-call-outline h3"></i>
                  <p class="fg-primary fw-medium fs-vlarge">{{ $elementos[5] }}</p>
                  <p class="mb-1">{{ $elementos[7] }}</p>
                  
                </div>
                <div class="col-md-4 text-center py-3 py-md-2">
                  <i class="mai-mail-open-outline h3"></i>
                  <p class="fg-primary fw-medium fs-vlarge">{{ $elementos[9] }}</p>
                  <p class="mb-1">{{ $elementos[11] }}</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif

</div> <!-- .bg-light -->
@endsection
