<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RouteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" =>['required'],
            "description" =>['required'],
            "points" =>['required'],
            'start_point' => ['required'],
            'end_point' => ['required'],
            'price' => ['required'],
            'images' => ['image'],
            'categories_id' => ['required'],
            'route_name_points' => ['required'],
        ];
    }
}
