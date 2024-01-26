<?php

namespace App\Http\Requests\Type;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'max:50', Rule::unique('projects')->ignore($this->project)],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name of the type is required',
            'name.min' => 'Name lenght must be at least of :min letters',
            'name.min' => 'Name lenght must max of :max letters',
            'name.unique' => 'This name is already used. Try another'
        ];
    }
}
