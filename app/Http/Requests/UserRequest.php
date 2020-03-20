<?php

namespace GitScrum\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:4',
            'email' => 'email|required',
            'active' => 'numeric|required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => "Nome requerido",
            'name.min' => "O nome deve ter ao menos 4 caracteres",
            'email.required' => "O e-mail é requrido",
            'email.email' => "O e-mail está num formato inválido",
            'active.required' => "Informe se o usuário está ativo ou inativo",
        ];
    }

    protected function getValidatorInstance()
    {
        $data = $this->all();
        $data['name'] = $data['name'];
        $data['email'] = $data['email'];
        $data['active'] = $data['active'];
        $this->getInputSource()->replace($data);

        return parent::getValidatorInstance();
    }
}
