<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            "title" => ['bail',"required", "string",'min:5','max:25', "max:255"],
            "author" => ['bail',"required", "string",'min:5', "max:255"],
            "price" => ['bail',"required", "integer", "min:1000", "max:100000"],
            "description" => ['bail',"required", "string", "min:30", "max:255"],
            "isbn" => ['bail',"required", "integer"],
        ];
    }
}
