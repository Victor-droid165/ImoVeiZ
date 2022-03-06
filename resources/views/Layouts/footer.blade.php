<footer class="bd-footer py-5 bg-light border-top">
  <div class="container py-5">
    <div class="row">
      <div class="col-2">
      <x-application-logo/>
        ImoVeiZ
      </div>

      <div class="col-2 offset-2">
        <h5>Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('home')}}" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="{{route('quem-somos')}}" class="nav-link p-0 text-muted">Quem Somos</a></li>
          <li class="nav-item mb-2"><a href="{{route('corretores')}}" class="nav-link p-0 text-muted">Corretores</a></li>
          <li class="nav-item mb-2"><a href="{{route('contato')}}" class="nav-link p-0 text-muted">Contato</a></li>
        </ul>
      </div>

      <div class="col-5 offset-1">
        <form>
          <h5>Inscreva-se na nossa newsletter</h5>
          <p>Receba mensalmente as melhores notícias sobre imóveis do nosso país</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Endereço de e-mail</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Inscrever</button>
          </div>
        </form>
      </div>
    </div>
    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2021 ImoVeiZ. Todos os direitos reservados.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3">
            <a class="link-dark" href="#">
                <img src="https://img.icons8.com/ios-filled/50/000000/facebook-circled--v2.png" width="36" height="36" />
            </a>
        </li>
        <li class="ms-3">
            <a class="link-dark" href="#">
              <img src="https://img.icons8.com/windows/32/000000/twitter.png" width="36" height="36" />
            </a>
        </li>
        <li class="ms-3">
            <a class="link-dark" href="#">
                <img src="https://img.icons8.com/windows/32/000000/linkedin-2.png" width="36" height="36" />
            </a>
        </li>    
    </ul>
    </div>
  </div>
</footer>