<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCandidatoRequest extends FormRequest
{

    /**
     * Determine if the Candidato is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->candidato->id == request()->candidato->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'orgao_expedidor' => ['required', 'string'],
            'uf_rg' => ['required', 'string'],
            'data_expedicao' => ['required', 'date'],
            'titulo' => ['required', 'titulo_eleitor'],
            'zona_eleitoral' => ['required', 'string'],
            'secao_eleitoral' => ['required', 'string'],
            'cidade_natal' => ['required', 'string'],
            'uf_natural' => ['required', 'string'],
            'pais_natural' => ['required', 'string'],
            'estado_civil' => ['required', 'string'],
            'pai' => ['nullable', 'string'],
            'reside' => ['required', 'string'],
            'localidade' => ['required', 'string'],
            'escola_ens_med' => ['required', 'string'],
            'uf_escola' => ['required', 'string'],
            'ano_conclusao' => ['required', 'digits:4'],
            'modalidade' => ['required', 'string'],
            'concluiu_publica' => ['required', 'boolean'],
            'necessidades' => ['required', 'array'],
            'cor_raca' => ['required', 'string'],
            'etnia' => ['required', 'string'],
            'trabalha' => ['required', 'boolean'],
            'grupo_familiar' => ['required', 'numeric'],
            'valor_renda' => ['required', 'numeric'],
            'nu_rg' => ['required', 'string'],
            'tp_sexo' => ['required', 'string'],
            'no_mae' => ['required', 'string'],
            'ds_logradouro' => ['required', 'string'],
            'nu_endereco' => ['required', 'string'],
            'nu_cep' => ['required', 'string'],
            'ds_complemento' => ['nullable', 'string', 'exclude_if:ds_complemento,null'],
            'no_bairro' => ['required', 'string'],
            'no_municipio' => ['required', 'string'],
            'sg_uf_inscrito' => ['required', 'string'],
            'nu_fone1' => ['required', 'string'],
            'nu_fone2' => ['nullable', 'string'],
        ];
    }
}
