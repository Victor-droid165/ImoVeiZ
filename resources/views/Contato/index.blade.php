@extends('Layouts.app')
@section('title', 'Contato')
@section('body')
    @include('components.mensagem', ['mensagem' => $mensagem])
    <div class="container row col-11 me-auto ms-auto mt-5 position-flex justify-content-center
    align-items-center">
      <form method="POST" action="{{ route('contato.send') }}" 
      class="row g-2 col-7 border border-1 rounded" style="min-height: 350px">
        @csrf
        <div class="col-md-6">
          <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control 
          {{$nome_invalido === false ? 'is-valid' : 'is-invalid'}}" value="{{Request::old('nome')}}">
          <div class="valid-feedback">
            Tudo certo!
          </div>
          <div class="invalid-feedback">
            @if($errors->has('nome'))
              @foreach($erros['nome'] as $erro_nome) 
                {{$erro_nome}}
              @endforeach
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <input id="sobrenome" name="sobrenome" type="text" placeholder="Sobrenome" class="form-control
          {{$sobrenome_invalido === false ? 'is-valid' : 'is-invalid'}}"
          value="{{Request::old('sobrenome')}}">
          <div class="valid-feedback">
            Tudo certo!
          </div>
          <div class="invalid-feedback">
            @if($errors->has('sobrenome'))
              @foreach($erros['sobrenome'] as $erro_sobrenome) 
                {{$erro_sobrenome}}
              @endforeach
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <input id="email" name="email" type="email" placeholder="Seu melhor email" class="form-control
          {{$email_invalido === false ? 'is-valid' : 'is-invalid'}}" value="{{Request::old('email')}}">
          <div class="valid-feedback">
            Tudo certo!
          </div>
          <div class="invalid-feedback">
            @if($errors->has('email'))
              @foreach($erros['email'] as $erro_email) 
                {{$erro_email}}
              @endforeach
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <input id="numero" name="numero" type="tel" placeholder="Telefone" class="form-control
          {{$telefone_invalido === false ? 'is-valid' : 'is-invalid'}}" value="{{Request::old('numero')}}">
          <div class="valid-feedback">
            Tudo certo!
          </div>
          <div class="invalid-feedback">
            @if($errors->has('numero'))
              @foreach($erros['numero'] as $erro_numero) 
                {{$erro_numero}}
              @endforeach
            @endif
          </div>
        </div>
        <div class="col">
          <textarea id="mensagem" name="mensagem" class="form-control
          {{$mensagem_invalida === false ? 'is-valid' : 'is-invalid'}}" 
          placeholder="Fale Conosco!" value="{{Request::old('mensagem')}}"></textarea>
          <div class="valid-feedback">
            Tudo certo!
          </div>
          <div class="invalid-feedback">
            @if($errors->has('mensagem'))
              @foreach($erros['mensagem'] as $erro_mensagem) 
                {{$erro_mensagem}}
              @endforeach
            @endif
          </div>
        </div>
        <div class="col-12 mt-3 mb-1 text-center">
          <button type="submit" class="btn btn-primary">Quero encontrar os melhores imóveis!</button>
        </div>
      </form>
      <div class="col-1"></div>
      <div class="col-4 ms-2 card bg-light text-dark position-flex">
        <img src="{{asset('/assets/img/logo.png')}}" class="card-img img-responsive" alt="...">
      </div>
    </div>
    <div class="divider my-4"></div>
    <div class="card mb-3 col-11 tex-center m-auto">
      <div class="row g-0">
        <div class="col-7">
          <img src="{{asset('/assets/img/sede.png')}}" class="img-fluid rounded-start" alt="">
        </div>
        <div class="col-4">
          <div class="card-body">
            <h5 class="card-title">Nossa Sede</h5>
            <p class="card-text"><small class="text-muted">Rua dos Bobos, N° 0 - Catolé, Campina Grande</small></p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut consectetur
                odio, eu lobortis felis. Aenean vel nisl pellentesque, interdum lectus et, laoreet enim.
                In scelerisque ut nisi vitae feugiat. Nam ipsum lectus, rutrum vitae quam ac, aliquam eleifend
                augue. Donec vel orci ex. Proin eget dignissim purus, id malesuada neque. Aliquam erat volutpat.</p>
            
          </div>
        </div>
      </div>
    </div>
@endsection
