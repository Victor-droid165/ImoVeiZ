@extends('Layouts.app')
@section('title', 'Visualizar Anúncio')
@section('body')
    <div class="container py-3 justify-content-center">
        <div class="ratio ratio-21x9">
            <img src="{{Storage::url('').$anuncio->imagem}}" class="img-fluid" alt="Imagem do Anúncio">
        </div>
        <div class="card mt-5 py-3 h-100">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="row">
                        <div class="col-11">
                            {{$anuncio->titulo}}
                        </div>
                        <div class="col-1">
                            @if(Auth::check() && Auth::user()->id == $anuncio->user_id)
                                <a class="justify-content-end link-danger" 
                                href="{{route('destruir_anuncio', ['anuncio' => $anuncio]);}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    
                    
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa fa-map-marker"></i>
                    <span>
                        {{$endereco->rua}}, 
                        {{$endereco->numero}}, 
                        {{$endereco->bairro}}. 
                        {{$endereco->cep}}
                    </span>
                </h6>
                <h5 class="pt-3">
                    Descrição
                </h5>
                <p class="card-text">{{$anuncio->descricao}}</p>
            </div>
        </div>
        <div class="card mt-5 py-3 h-100">
            <div class="card-body">
                <h5 class="card-title">Endereço</h5>
                <p class="card-text">
                    <div class="row py-2 card-subtitle text-muted">
                        <div class="col">
                            Endereço: {{$endereco->rua}}, {{$endereco->numero}}
                        </div>
                        <div class="col">
                            CEP: {{$endereco->cep}}
                        </div>
                    </div>
                    <div class="row py-2 card-subtitle text-muted">
                        <div class="col">
                            País: Brasil
                        </div>
                        <div class="col">
                            Cidade: {{$endereco->cidade}}
                        </div>
                    </div>
                    <div class="row pt-2 card-subtitle text-muted">
                        <div class="col">
                            Estado: {{$endereco->estado}}
                        </div>
                        <div class="col">
                            Bairro: {{$endereco->bairro}}
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
@endsection