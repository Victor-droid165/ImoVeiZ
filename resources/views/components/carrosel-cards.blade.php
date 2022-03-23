<div class="row">
    <div class="col-6 mb-3">
        <h3 class="display-6 fw-bold">Imóveis para {{$categoria}}</h3>
        <p class="col-2 section-title"></p>
    </div>
    <div class="col-6 text-end mt-3">
        <a role="button" href="{{route('anuncios')}}"class="btn btn-outline-primary">
        Veja todos os imóveis
        <i class="fas fa-long-arrow-alt-right"></i>
        </a>
    </div>
    <div class="col-12">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            @for ($i = 0; $i < count($anuncios); $i+=3)
                <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                    <div class="row justify-content-center">
                    @for ($j = $i; $j < $i+3; $j+=1)
                        @if($j >= count($anuncios))
                        <x-card-placeholder></x-card-placeholder>
                        @else
                        <div class="col-md-3 mb-3 ">
                            <div class="card h-100 text-center bg-bottom">
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
                        @endif
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