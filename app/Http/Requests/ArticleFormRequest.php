<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'author' => 'required',
            'dolz' => 'required',
            'short' => 'required',
            'content' => 'required',
            'no' => 'required|integer',
            'status' => 'required',
            'image' => 'required|image',
            'date' => 'required|date|date_format:Y-m-d',            
        ];
    }
        public function messages() {
        return [
            'title.required' => 'Следует заполнить название статьи',
            'no.required' => 'Не указан номер журнала',
            'no.integer' => 'В номере журнала допускаются только цифры',
            'short.required' => 'Заполните краткое описание статьи',
            'content.required' => 'Не заполнена сама статья',
            'image.image' => 'Картинка должна быть картинкой',
            'date.date' => 'Дата должна быть датой',
            'author.required' => 'Введите автора. Если он отсутствует, напишите редакция',
        ];
    }
}
