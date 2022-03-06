@extends('Layouts.app')
@section('title', 'Corretores')
@section('body')
<div class="row row-cols-11 m-auto pt-3 pb-5 g-4 justify-content-center align-items-center">
      <div class="col">
        <div class="card justify-content-center align-items-center">
          <img src="{{asset('/assets/img/corretor1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">João, 25</h5>
            <p class="card-text">Duis quis dolor volutpat, facilisis ipsum ac, consectetur nisl. Aliquam vehicula
                ornare augue. Nam eu nisl vitae mi elementum eleifend. Ut eget quam at dui semper imperdiet. Cras
                vitae neque quis ex posuere suscipit sed et risus. Praesent sit amet neque dolor. Praesent diam diam,
                dictum non lectus et, viverra posuere lectus. Donec congue, enim quis sodales aliquam, libero massa
                fringilla leo, ac sollicitudin nisi ligula vel justo.</p>
            <hr>
            <button type="button" class="btn btn-primary btn-sm">Entre em contato comigo!</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card justify-content-center align-items-center">
          <img src="{{asset('/assets/img/corretora2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Juliette, 30</h5>
            <p class="card-text">Ut eu lacus vitae lorem venenatis dignissim. Aliquam vitae ex vulputate,
                feugiat purus ac, dictum diam. Phasellus sit amet sapien lorem. Sed sodales nibh ut leo finibus
                ultricies. Morbi sapien eros, finibus et arcu nec, placerat feugiat metus. Phasellus eget ex nec lorem
                dapibus efficitur. Morbi dignissim nulla vel tellus rutrum, at feugiat nisi varius. Phasellus luctus
                tincidunt ornare.</p>
            <hr>
            <button type="button" class="btn btn-primary btn-sm">Entre em contato comigo!</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card justify-content-center align-items-center">
          <img src="{{asset('/assets/img/corretor3.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mateus, 23</h5>
            <p class="card-text">Praesent mattis rutrum nunc. Quisque eleifend erat felis, non commodo ante finibus
                quis. Sed eleifend vitae mauris nec commodo. Fusce in pretium est, sit amet vestibulum mauris.
                Aliquam posuere pellentesque urna feugiat consequat. Maecenas auctor in sem id commodo. Phasellus
                molestie elementum odio eget elementum. Integer sit amet porta purus. Fusce sagittis vel ante et
                condimentum.</p>
            <hr>
            <button type="button" class="btn btn-primary btn-sm">Entre em contato comigo!</button>
          </div>
        </div>
      </div>
    </div>
@endsection
