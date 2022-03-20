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
          <div class="row">
              <div class="col-6">
                  <h3 class="display-6 fw-bold mb-3">Imóveis à Venda</h3>
              </div>
              <div class="col-12">
                  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        @for ($i = 0; $i < count($anuncios); $i+=4)
                          <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                              <div class="row justify-content-center">
                                @for ($j = $i; $j < $i+4 && $j < count($anuncios); $j+=1)
                                  <div class="col-md-3 mb-3 ">
                                    <div class="card text-center bg-bottom">
                                      <h5 class="card-header">
                                      {{$anuncios[$j]->categoria}}
                                      </h5>
                                      <div class="ratio ratio-1x1">
                                        <img src="{{Storage::url(''). $anuncios[$j]->imagem}}"
                                        class="card-img-top"
                                        alt="Anúncio de Imóvel">
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">{{$anuncios[$j]->titulo}}</h5>
                                        <p class="card-text">{{$anuncios[$j]->descricao}}</p>
                                      </div>
                                      <div class="card-footer text-muted">
                                        {{ucfirst(Carbon\Carbon::parse($anuncios[$j]->created_at)->diffForHumans())}}
                                      </div>
                                      <a href="{{route('anuncio-info', ['anuncio' => $anuncios[$j]->id]);}}"
                                      class="stretched-link"></a>
                                    </div>
                                  </div>
                                @endfor
                              </div>
                          </div>
                        @endfor
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                       data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                      data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <x-fab-button href="{{route('form_criar_anuncio')}}"></x-fab-button>
@endsection
