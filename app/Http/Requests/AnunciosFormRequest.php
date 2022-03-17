<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnunciosFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|min:8',
            'categoria' => 'required',
            'tipo' => 'required',
            'andar' => 'required_if:tipo,==,Apartamento',
            'nome_predio' => 'required_if:tipo,==,Apartamento',
            'caracteristicas_predio' => 'required_if:tipo,==,Apartamento',
            'area_construida' => 'required_if:tipo,==,Casa',
            'area_terreno' => 'required_if:tipo,==,Casa',
            'frente' => 'required_if:tipo,==,Terreno',
            'lado' => 'required_if:tipo,==,Terreno',
            'descricao' => 'required',
            'rua' => 'required',
            'numero_rua' => 'required',
            'bairro' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'titulo.min' => 'O campo Título precisa ter pelo menos oito caracteres'
        ];
    }
}
