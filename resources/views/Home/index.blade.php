@extends('Layouts.app')
@section('title', 'Página inicial')
@section('body')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
        class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/assets/img/apartamento.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('/assets/img/fazenda.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('/assets/img/casa.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
      @foreach($anuncios as $anuncio)
        <div class="col">
          <div class="card text-center" style="width: 20vw;">
            <h5 class="card-header">
              {{$anuncio->categoria}}
            </h5>
            <div class="ratio ratio-1x1">
              <img src="{{Storage::url(''). $anuncio->imagem}}" class="card-img-top"
              alt="Anúncio de Imóvel">
            </div>
            
            <div class="card-body">
              <h5 class="card-title">{{$anuncio->titulo}}</h5>
              <p class="card-text">{{$anuncio->descricao}}</p>
            </div>
            <div class="card-footer text-muted">
              {{ucfirst(Carbon\Carbon::parse($anuncio->created_at)->diffForHumans())}}
            </div>
            <a href="{{route('anuncio-info', ['anuncio' => $anuncio->id]);}}" class="stretched-link"></a>
          </div>
        </div>
      @endforeach
    </div>
    <x-fab-button href="{{route('form_criar_anuncio')}}"></x-fab-button>
    <hr>
@endsection
