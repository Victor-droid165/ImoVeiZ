


@for ($j = $i; $j < $i+3 && $j < count($anuncios); $j+=1)
<div class="col-md-3 mb-3 ">
<div class="card text-center">
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