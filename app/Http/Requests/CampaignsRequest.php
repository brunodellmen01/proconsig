<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaignsRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                }

            case 'POST': {
                    return [

                        'name'        => 'required|string|min:1|max:150',
                    ];
                }

            case 'PUT':
            case 'PATCH': {
                    return [
                        'name'        => 'required|string|min:1|max:150',
                    ];
                }
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'Minimo de 1 caracteres',
            'name.max' => 'Minimo de 150 caracteres',
        ];
    }
}
