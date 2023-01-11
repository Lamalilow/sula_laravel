<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrRequest extends FormRequest
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
            'name' => 'required',
            'login' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'age' => 'required|numeric|min:18',
            'gender' => 'required|in:ж,м',
            'city' => 'required',
            'description' => 'required',
            'photo' => 'required|file|image|max:10240',
            'password_confirmation' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения',
            'unique' => 'Значение уже используется',
            'confirmed' => 'Пароли должны совпадать',
            'age.min' => 'Минимальный возраст 18 лет',
            'gender.in' => 'зря менял значение кнопки, тут проверка на сервере',
        ];
    }
}
