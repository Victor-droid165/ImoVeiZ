<form method="POST" action="{{ route('anuncios') }}">
  @csrf
  <div class="modal fade" id="filtrosModal" tabindex="-1" aria-labelledby="filtrosModalLabel"
  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content text-center">
        <div class="modal-header">
          <h5 class="modal-title" id="filtrosModalLabel"><i class="fa fa-filter"> Filtros </i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Categorias</h5>
          <div class="form-check form-check-inline mb-3">
              <input class="form-check-input" type="radio" id="categoria-radio-1" name="categoria"
              value="aluguel" {{ (Request::input('categoria') == "a luguel" ? "checked":"") }}>
              <label class="form-check-label" for="categoria-radio-1">Aluguel</label>
          </div>
          <div class="form-check form-check-inline mb-3">
              <input class="form-check-input" type="radio" id="categoria-radio-2" name="categoria"
              value="venda" {{ (Request::input('categoria') == "venda" ? "checked":"") }}>
              <label class="form-check-label" for="categoria-radio-2">Venda</label>
          </div>
          <hr />
          <h5>Tipos de Imóveis</h5>
          @foreach($tipos as $tipo)
          <div class="form-check form-check-inline mb-3">
              <input class="form-check-input" type="radio" id="tipo-radio-{{++$cont}}" name="tipo"
              value="{{$tipo}}" {{ (Request::input('tipo') == $tipo ? "checked":"") }}>
              <label class="form-check-label" for="tipo-radio-{{++$cont}}">{{ucfirst($tipo)}}</label>
          </div>
          @endforeach
          <hr />
          <h5>Localidade</h5>
          <div class="form-floating">
              <select class="form-select" id="estado-filtros" name="estado"
                  aria-label="Estados do Brasil">
                      <option value="" selected>Selecionar um estado</option>
                      @foreach($estados as $estado)
                          <option value="{{$estado->nome}}"
                          {{ (Request::input('estado') == $estado->nome ? "selected":"") }}>
                              {{$estado->nome}} - {{$estado->abreviacao}}
                          </option>
                      @endforeach 
              </select>
              <label for="estado">Estado</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary" onclick="event.preventDefault();
                  this.closest('form').submit();">Filtrar</button>
        </div>
      </div>
    </div>
  </div>
</form>