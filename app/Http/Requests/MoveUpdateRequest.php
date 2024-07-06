<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoveUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:pokemon|max:20'. $this->route('move')->id,
            'damage' => 'required|integer',
            'type' => 'required|numeric',
            'move_descr' => 'string',
        ];
    }
}
