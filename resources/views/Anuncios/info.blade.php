@extends('Layouts.app')
@section('title', 'Visualizar Anúncio')
@section('body')
    <ul> 
        <!-- Características do anúncio se pega assim -->
        <li>Descrição do Anúncio: {{$anuncio->descricao}}</li>
        <!-- Características do imóvel do anúncio se pega assim -->
        <li>{{$anuncio->imovel->valor}}</li>
        <!-- Características do endereço do imóvel se pega assim -->
        <li>{{$anuncio->imovel->endereco->rua}}</li>
        <!-- Verifica-se o tipo do imóvel assim-->
        <li>É Apartamento: {{$is_apartamento}}</li> <!-- 1 == True -->
    </ul>
@endsection