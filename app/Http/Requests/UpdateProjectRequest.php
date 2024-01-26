<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:300', Rule::unique('projects')->ignore($this->project)],
            'description' => ['required'],
            'type_id' => ['nullable', 'exists:types,id']

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title of the project is required',
            'title.unique' => 'This title has already been taken. Choose another',
            'title.min' => 'Title lenght must be at least of :min letters',
            'title.max' => 'Title lenght must max of :max letters',
            'description.required' => 'Description of the project is required',
        ];
    }
}
