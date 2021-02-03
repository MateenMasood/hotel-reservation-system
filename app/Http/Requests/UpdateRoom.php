<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoom extends FormRequest
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
            'hotel' => 'required|numeric',
            'roomType' => 'required|numeric',
            'days' => 'required|numeric',
            'price' => 'required|numeric',
            'gst' => 'required',
            'amenities' => 'required',
        ];
    }
}
