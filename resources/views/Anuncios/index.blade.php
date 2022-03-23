@extends('Layouts.app')
@section('title', 'Anúncios')
@section('body')
    <div class="container py-3">
        <div class="row justify-content-center">
            @if(count(Request::all()) > 0)
                <div class="col offset-5">
                    <a role="button" href="{{route('anuncios')}}" class="btn btn-outline-info">
                        <i class="fa fa-filter"> </i>
                        Retirar filtros
                    </a>
                </div>
            @endif
            @foreach($anuncios as $anuncio)
                <div class="col-md-3 mb-3">
                    <div class="card text-center bg-bottom h-100">
                    <h5 class="card-header">
                    {{$anuncio->categoria}}
                    </h5>
                    <div class="ratio ratio-1x1">
                        <img src="{{Storage::url(''). $anuncio->imagem}}"
                        class="card-img-top"
                        alt="Anúncio de Imóvel">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$anuncio->titulo}}</h5>
                        <p class="card-text">{{$anuncio->descricao}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ucfirst(Carbon\Carbon::parse($anuncio->created_at)->diffForHumans())}}
                    </div>
                    <a href="{{route('anuncio-info', ['anuncio' => $anuncio->id]);}}"
                    class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection