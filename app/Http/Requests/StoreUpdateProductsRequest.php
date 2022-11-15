<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductsRequest extends FormRequest
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
            //
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:10000',
            'photo' => 'image|required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nome é obirgatório',
            'description.required' => 'Descrição é obirgatório',
            'photo.required' => 'Foto é obirgatório',
            'name.min' => 'Ops! Deve informar no minimo 3 caracteres para o nome.',
            'description.min' => 'Ops! Deve informar no minimo 3 caracteres para a descrição.',
            'name.max' => 'Ops! Deve informar no máximo 255 caracteres.'
        ];
    }
}
