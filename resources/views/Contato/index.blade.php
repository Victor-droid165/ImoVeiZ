@extends('Layouts.app')
@section('title', 'Contato')
@section('body')
    <div class="container row col-11 me-auto ms-auto mt-5 position-flex justify-content-center
    align-items-center">
      <form class="row g-2 col-7 border border-1 rounded" style="height: 350px">
        <div class="col-md-6 mb-0">
          <label class="form-label"></label>
          <input type="text" placeholder="Nome" class="form-control">
        </div>
        <div class="col-md-6 mb-0">
          <label class="form-label"></label>
          <input type="text" placeholder="Sobrenome" class="form-control">
        </div>
        <div class="col-md-6 mt-0">
          <label class="form-label"></label>
          <input type="email" placeholder="Seu melhor email" class="form-control">
        </div>
        <div class="col-md-6 mt-0">
          <label for="inputAddress2" class="form-label"></label>
          <input type="tel" placeholder="Telefone" class="form-control">
        </div>
        <div class="input-group mb-1">
          <textarea class="form-control" placeholder="Fale Conosco!"></textarea>
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
    <br><hr><br>
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
