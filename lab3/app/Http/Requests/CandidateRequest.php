<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required|string|max:100|",
            "sex"=>"required|string|max:100",
            "year_of_birth"=>"required",
            "education"=>"required|string|max:100",
            "specialty"=>"required|string|max:100"
        ];
    }
}
