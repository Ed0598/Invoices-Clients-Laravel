<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequestClients extends FormRequest
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
            'société'=>'required|min:3',
            'téléphone'=>'required|numeric',
            'email'=>'required',
            'adresse'=>'required',
            'TVA'=>'required',
            'facture'=>'required',
            'Description'=>'required',
        ];
    }
}
