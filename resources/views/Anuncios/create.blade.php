@extends('Layouts.app')
@section('title', 'Publicar Anúncio')
@section('body')
    <form class="container text-center my-4" method="POST"
    action="{{ route('criar_anuncio') }}">
        @csrf
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Criação de Anúncio</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center mb-3">
            <div class="form-floating mb-3 col">
                <input type="text" class="form-control" id="titulo" name="titulo"
                placeholder="nome@exemplo.com">
                <label for="titulo" class="ms-2">Título do Anúncio</label>
            </div>
            <div class="form-floating mb-3 col">
                <select class="form-select" id="categoria" name="categoria"
                aria-label="Opções de categorias">
                    <option value="" selected>Selecionar uma opção de categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria}}"> {{$categoria}} </option>
                    @endforeach 
                </select>
                <label for="categoria" class="ms-2">Categoria</label>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="form-floating mb-3 col-5">
                <select class="form-select" id="tipo" name="tipo"
                onchange="return show_tipo();" aria-label="Tipos de imóveis">
                    <option value="" selected>Selecionar um tipo de imóvel</option>
                    @foreach($tipos as $tipo)
                        <option value="{{$tipo}}"> {{$tipo}} </option>
                    @endforeach 
                </select>
                <label for="tipo" class="ms-2">Tipo</label>
            </div>
        </div>
        <div id="ApartamentoDiv" class="d-none hidden-show-tipo">
            <div class="row justify-content-center mb-3">
                <div class="form-floating mb-3 col-5">
                    <input type="number" class="form-control" id="andar" name="andar"
                    placeholder="8">
                    <label for="andar" class="ms-2">Andar</label>
                </div>
            </div>
            <div class="row justify-content-center mb-3" >
                <div class="form-floating mb-3 col-5">
                    <input type="text" class="form-control" id="nome_predio" name="nome_predio"
                    placeholder="Prédio de Exemplo">
                    <label for="nome_predio" class="ms-2">Nome do Prédio</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-floating mb-3 col-5">
                    <textarea class="form-control" placeholder="Escreva as características do prédio aqui."
                    id="caracteristicas_predio" name="caracteristicas_predio"
                    style="height: 100px"></textarea>
                    <label for="caracteristicas_predio" class="ms-2">Características do Prédio</label>
                </div>
            </div>
        </div>

        <div id="CasaDiv" class="d-none hidden-show-tipo">
            <div class="row justify-content-center mb-3">
                <div class="form-floating mb-3 col-5">
                    <input type="number" class="form-control" id="area_construida" name="area_construida"
                    placeholder="8">
                    <label for="area_construida" class="ms-2">Área Construída</label>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="form-floating mb-3 col-5">
                    <input type="number" class="form-control" id="area_terreno" name="area_terreno"
                    placeholder="10">
                    <label for="area_terreno" class="ms-2">Área do Terreno</label>
                </div>
            </div>
        </div>

        <div id="TerrenoDiv" class="d-none hidden-show-tipo">
            <div class="row justify-content-center mb-3">
                <div class="form-floating mb-3 col-5">
                    <input type="number" class="form-control" id="frente" name="frente"
                    placeholder="8">
                    <label for="frente" class="ms-2">Frente</label>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="form-floating mb-3 col-5">
                    <input type="number" class="form-control" id="lado" name="lado"
                    placeholder="10">
                    <label for="lado" class="ms-2">Lado</label>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="form-check mb-3 col-auto">
                    <input class="form-check-input" type="checkbox" id="agua" name="agua">
                    <label class="form-check-label" for="agua">Possui Água</label>
                </div>
                <div class="form-check mb-3 col-auto">
                    <input class="form-check-input" type="checkbox" id="luz" name="luz">
                    <label class="form-check-label" for="luz">Possui Luz</label>
                </div>
            </div>
        </div>
        <x-endereco-form ></x-endereco-form>
        
        <div class="row justify-content-center mb-3">
            <div class="form-floating mb-3 col-5">
                <textarea class="form-control" placeholder="Escreva a descrição do seu anúncio aqui." id="descricao" name="descricao" style="height: 100px"></textarea>
                <label for="descricao" class="ms-2">Descrição do Anúncio</label>
            </div>
        </div>

        <div id="FazendaDiv" class="hidden-show-tipo mt-3 d-none">
            <div class="row justify-content-center mb-3">
                <div class="form-check mb-3 col-auto">
                    <input class="form-check-input" type="checkbox" id="casa" name="casa">
                    <label class="form-check-label" for="casa">Possui Casa</label>
                </div>
                <div class="form-check mb-3 col-auto">
                    <input class="form-check-input" type="checkbox" id="plantacoes" name="plantacoes">
                    <label class="form-check-label" for="plantacoes">Possui Plantações</label>
                </div>
                <div class="form-check mb-3 col-auto">
                    <input class="form-check-input" type="checkbox" id="animais" name="animais">
                    <label class="form-check-label" for="animais">Possui Animais</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-floating mb-3 col-5">
                <input type="number" class="form-control" id="output" name="output">
                <label for="output" class="ms-2">Valor do Imóvel</label>
                <input type="range" class="form-range mt-3" min="0" max="{{10**7;}}" value="0" 
                id="valor" name="valor">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 py-2">Adicionar</button>
    
        </div>
    </form>
@endsection

<script>
    function show_tipo() {
        let selectTipo = document.getElementById('tipo');
        let userInput = selectTipo.options[selectTipo.selectedIndex].value;
        let showingTipos = document.getElementsByClassName('hidden-show-tipo show');
        if (showingTipos){
            for (let item of showingTipos) {
                item.classList.remove('show');
                item.classList.add('d-none');
                console.log(item);
            }
        }
        document.getElementById(userInput + "Div").classList.add('show');
        document.getElementById(userInput + "Div").classList.remove('d-none');
        return false;
    }
    window.onload = function() {
        var slider = document.getElementById("valor");
        var output = document.getElementById("output");
        output.value = slider.value;

        slider.oninput = function() {
            output.value = this.value;
        }
        output.oninput = function() {
            slider.value = this.value;
        }
    };
</script>