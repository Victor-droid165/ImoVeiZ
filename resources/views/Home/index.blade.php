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
    <div class="divider"></div>
    <section class="pt-5 pb-5 section-style">
      <div class="container">
        @include('components.carrosel-cards', [
          'anuncios'  => $vendas,
          'categoria' => 'Venda'
          ])
      </div>
    </section>
    <div class="divider"></div>
    <section class="pt-5 pb-5 section-style">
      <div class="container">
        <h3 class="display-6 fw-bold">Pesquise pelo tipo de imóvel</h3>
        <p class="col-2 section-title"></p>
        <div class="row justify-content-center">
          <div class="col-8 py-5">
            <div class="row">
              @foreach($tipos as $tipo)
                <div class="col-md-3 mb-3 text-center">
                  <div class="card card-tipo border border-transparent justify-content-center bg-bottom h-100">
                    <div class="ratio ratio-1x1">
                      <img src="{{Storage::url('').'/tipo/'.$tipo.'-tipo.png'}}" class="card-img-top" 
                      alt="Ícone de {{$tipo}}">
                    </div>
                    <div class="card-body">
                      <p class="fs-5 card-text">{{ucfirst($tipo)}}</p>                    
                    </div>
                    <a href="#" class="stretched-link"></a>
                  </div>
                </div>
                
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="divider"></div>
    <section class="pt-5 pb-5 section-style">
      <div class="container">
        @include('components.carrosel-cards', [
          'anuncios'  => $alugueis,
          'categoria' => 'Aluguel'
          ])
      </div>
    </section>
    <x-fab-button href="{{route('form_criar_anuncio')}}"></x-fab-button>
@endsection
