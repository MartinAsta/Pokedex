<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonCreateRequest extends FormRequest
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
            'name' => 'required|string|unique:pokemon|max:20',
            'hp' => 'required|integer',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'type1' => 'required|numeric',
            'type2' => 'nullable|numeric',
            'move1' => 'required|numeric',
            'move2' => 'nullable|numeric',
            'move3' => 'nullable|numeric',
            'move4' => 'nullable|numeric',
            'img' => 'nullable|image|max:2048',
        ];
    }
}
