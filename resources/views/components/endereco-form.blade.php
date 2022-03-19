<div class="row justify-content-center">
    <div class="row mb-4">
        <div class="col">
            <div class="form-floating">
                <input type="text" id="rua" name="rua" class="form-control">
                <label for="rua">Rua</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <input type="number" id="numero_rua" name="numero_rua" class="form-control">
                <label for="numero_rua">Número</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-floating">
                <input type="text" id="bairro" name="bairro" class="form-control">
                <label for="bairro">Bairro</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <input type="number" id="cep" name="cep" class="form-control">
                <label for="cep">Cep</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-floating">
                <select class="form-select" id="estado" name="estado"
                    aria-label="Estados do Brasil">
                        <option value="" selected>Selecionar um estado</option>
                        @foreach($estados as $estado)
                            <option value="{{$estado->nome}}">
                                {{$estado->nome}} - {{$estado->abreviacao}}
                            </option>
                        @endforeach 
                </select>
                <label for="estado">Estado</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <select class="form-select" id="cidade" name="cidade"
                    aria-label="Cidades do Brasil" disabled>
                        <option value="" selected>Selecionar uma cidade</option>
                        @foreach($cidades as $cidade)
                            <option value="{{$cidade->nome}}"> {{$cidade->nome}} </option>
                        @endforeach 
                </select>
                <label for="cidade">Cidade</label>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#estado').on('change', function () {
                var nomeEstado = this.value;
                if(!(nomeEstado === "")){
                    $("#cidade").html('');
                    $("#cidade").removeAttr('disabled');
                    $.ajax({
                        url: "{{url('api/fetch-cidades')}}",
                        type: "POST",
                        data: {
                            nome: nomeEstado,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (res) {
                            $('#cidade').html('<option value="">Selecionar uma cidade</option>');
                            $.each(res.cidades, function (key, value) {
                                $("#cidade").append('<option value="' + value
                                    .nome + '">' + value.nome + '</option>');
                            });
                        }
                    });
                } else{
                    $("#cidade").attr('disabled', true);
                }
                
        });
    });
</script>