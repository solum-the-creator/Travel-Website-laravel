<?php

namespace App\Http\Requests;

use App\Rules\IsValidDateReserve;
use Illuminate\Foundation\Http\FormRequest;

class PreReservationRequest extends FormRequest
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
            "house" =>['required'],
            "type" =>['integer'],
            "rooms" =>['exclude_if:type,2','integer'],
            'quantity' => ['required'],

            'start_date' => ['required','date','before_or_equal:end_date', new IsValidDateReserve($this->house,$this->end_date, $this->type,$this->rooms)],
            'end_date' => ['required','date','after_or_equal:start_date'],
        ];
    }

    public function messages()
    {
        return [
            'house.required' => 'Выберите дом для бронирования',
            'rooms.required'  => 'Выберите номер для бронирования',
            'quantity.required'  => 'Укажите количество гостей',
            'start_date.required'  => 'Укажите дату заселения',
            'start_date.before_or_equal'  => 'Дата заселения должна быть раньше даты выезда',
            'end_date.required'  => 'Укажите дату выезда',

        ];
    }
}
