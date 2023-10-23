<?php

namespace App\Http\Requests;

use App\Rules\CommentRule;
use Illuminate\Foundation\Http\FormRequest;

class CommentFormRequest extends FormRequest
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
            'name' => ['required','min:2','max:100','alpha', new CommentRule()],
            'email' => 'required|email',
            'text' => 'required|max:100',
        ];
    }
    public function attributes()
    {
        return [
            'text' => 'комментарий'
        ];
    }
}
