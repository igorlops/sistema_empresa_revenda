<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MovimentoEstoqueRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'produto_id'=>'required',
            'valor'=>'required|numeric',
            'quantidade'=>'required',
            'tipo'=>['required',Rule::in(['entrada','saida'])],
            'empresa_id'=>'required',
        ];
    }

    public function validationData()
    {
        $campos = $this->all();

        $campos['valor'] = numero_br_para_iso($campos['valor']);
        $campos['quantidade'] = numero_br_para_iso($campos['quantidade']);
        $this->replace($campos);
        return $campos;
    }

    private function validarTipo()
    {
        if ($this->method() === 'POST')
        {
            return ['required',Rule::in(['cliente','fornecedor'])];
        }
        return [];
    }
}
