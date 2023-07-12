<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'author'=> 'required|min:10|max:100',
            'title'=> 'required|min:10|max:150',
            'description'=> 'required|min:100|max:5000',
            'img'=> 'required',

        ];
    }

    public function messages(){
        return [
            'author.min'=>'Il campo autore è troppo corto!',
            'author.max'=>'Il campo autore è troppo lungo',
            'author.required'=>'Il campo autore è richiesto',
            'title.min'=>'Il campo titolo è troppo corto!',
            'title.max'=>'Il campo titolo è troppo lungo',
            'title.required'=>'Il campo titolo è richiesto',
            'description.min'=>'Il campo descrizione è troppo corto!',
            'description.max'=>'Il campo descrizione è troppo lungo',
            'description.required'=>'Il campo descrizione è richiesto',
            'img.required'=>'Il campo immagine è richiesto',
            
        ];
    }
}
