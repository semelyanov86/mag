<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MagFormRequest extends FormRequest
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
            'no' => 'required|integer',
            'intro' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'link1' => 'required|url',
            'link2' => 'required|url',
            'link3' => 'required|url',
            'date' => 'required|date|date_format:Y-m-d',
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Следует заполнить название журнала',
            'no.required' => 'Не указан номер журнала',
            'no.integer' => 'В номере журнала допускаются только цифры',
            'intro.required' => 'Заполните краткое описание этого номера',
            'content.required' => 'Сопроводительное письмо не заполнено',
            'link1.url' => 'Ссылка 1 в неверном формате',
            'link2.url' => 'Ссылка 2 в неверном формате',
            'link3.url' => 'Ссылка 3 в неверном формате',
        ];
    }
}
