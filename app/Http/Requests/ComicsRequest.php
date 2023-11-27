<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
            'title' =>'required|min:3|max:100',
            'price' => 'required|min:3|max:10',
            'description' => 'required|min:3',
            'thumb' => 'required|min:3',
            'series' => 'required|min:3|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:30',
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Devi inserire il titolo del comics',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo del comics deve avere massimo :max caratteri',
            'price.required'=>'Devi inserire il prezzo del comics',
            'price.min' => 'Il prezzo deve avere minimo :min caratteri',
            'price.max' => 'Il prezzo del comics deve avere massimo :max caratteri',
            'description.required'=>'Devi inserire la descrizione del comics',
            'description.min' => 'La descrizione deve avere minimo :min caratteri',
            'thumb.required'=>"Devi inserire il link dell'immagine del comics",
            'thumb.min' => "Il link dell'immagine deve avere minimo :min caratteri",
            'series.required'=>'Devi inserire la serie del comics',
            'series.min' => 'La serie deve avere minimo :min caratteri',
            'series.max' => 'La serie del comics deve avere massimo :max caratteri',
            'sale_date.required'=>'Devi inserire la data di publicazione del comics (YYYY-MM-DD)',
            'sale_date.date'=>'Devi inserire una data di publicazione del comics (YYYY-MM-DD)',
            'type.required'=>'Devi inserire il tipo del comics',
            'type.min' => 'Il tipo deve avere minimo :min caratteri',
            'type.max' => 'Il tipo del comics deve avere massimo :max caratteri'
        ];
    }
}
