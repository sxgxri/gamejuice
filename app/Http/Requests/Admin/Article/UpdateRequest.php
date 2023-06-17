<?php

namespace App\Http\Requests\Admin\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'artcategory_id' => 'required|integer|exists:artcategories,id',
            'arttag_ids' => 'nullable|array',
            'arttag_ids.*' => 'nullable|integer|exists:arttags,id',
        ];
    }

    public function messages() //СООБЩЕНИЯ О ПРАВИЛАХ ВВОДА ДАННЫХ
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Данные должны соответствовать строчному типу',
            'preview_image.required' => 'Это поле необходимо заполнить',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле необходимо заполнить',
            'main_image.file' => 'Необходимо выбрать файл',
            'artcategory_id.required' => 'Это поле необходимо для заполнения',
            'artcategory_id.integer' => 'ID категории должно быть целым числом',
            'artcategory_id.exists' => 'Укажите существующий ID категории',
            'arttag_ids.array' => 'Необходимо отправить массив данных',
        ];
    }

}
