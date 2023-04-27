<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects,title|string|max:100',
            'client' => 'required|string',
            'description' => 'required|max:1000|string',
            'url' => 'required|url|string',
            'date_creation' => 'required|date',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'exists:technologies,id'

        ];
    }
}
