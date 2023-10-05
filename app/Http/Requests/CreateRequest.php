<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title'=> 'bail|required|min:3|max:15|unique:books',
            "author" => ["required", "string", "max:255"],
            "price" => ["required", "integer", "min:10000", "max:10000000"],
            "isbn" => ["required", "integer", "unique:books,isbn", "digits:9"],
        ];
    }
}
