<?php

namespace GitScrum\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'title' => 'required|min:3',
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
            'title.required' => "O título é requerido",
            'title.min' => "O título deve ter ao menos 3 caracteres",
        ];
    }

    protected function getValidatorInstance()
    {
        $data = $this->all();
        $data['title'] = $data['title'];
        $data['description'] = $data['description'];
        $this->getInputSource()->replace($data);

        return parent::getValidatorInstance();
    }
}
