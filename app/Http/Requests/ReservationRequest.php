<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            "second_name" =>['required'],
            "first_name" =>['required'],
            "email" =>['required','email'],
            'phone' => ['required'],
            'gender' => ['required'],
            'comment_order' => [],
            'birthday_date' => ['required'],
            'payment_method_id' => ['required'],

        ];
    }

    public function messages()
    {
        return [
            'second_name.required' => 'Заполните поле с фамилией',
            'first_name.required' => 'Заполните поле с именем',
            'email.required' => 'Заполните поле с эл. почтой',
            'email.email' => 'Заполненное поле не явялется эл.почтой',
            'phone.required' => 'Заполните поле с номером телефона',
            'gender.required' => 'Выберите пол',
            'birthday_date.required' => 'Заполните поле с датой рождения',
            'payment_method_id.required' => 'Выберите способ оплаты',


        ];
    }
}
