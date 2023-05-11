<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required', 'min:15',
            'due_date' => 'required',
            'description' => 'nullable',
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'title' => strip_tags($this['title']),
            'due_date' => strip_tags($this['due_date']),
            'description' => strip_tags($this['description']),
        ]);
    }
}
