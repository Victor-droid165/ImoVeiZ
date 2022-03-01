@extends('Layouts.app')
@section('title', 'Quem Somos')
@section('body')
<div class="container justify-content-center">
      <div class="row col-11 mx-auto justify-content-center align-self-baseline">
        <div class="col-4">
          <div class="card">
            <img src="{{asset('/assets/img/lorena.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lorena Albuquerque de Andrade</h5>
              <p class="card-text">201910040007<br>lorena.albuquerque@academico.ifpb.edu.br<br></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="{{asset('/assets/img/victor.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Victor Emanuel Barbosa Rodrigues</h5>
              <p class="card-text">201910040009<br>rodrigues.victor@academico.ifpb.edu.br</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="{{asset('/assets/img/pedro.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pedro Lôbo Nascimento</h5>
              <p class="card-text">201910040027<br>pedro.lobo@academico.ifpb.edu.br</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
