<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'price_adult' => 'required|numeric',
            'child_price' => 'required|numeric',
            'from'=> 'required|numeric',
            'to'=> 'required|numeric',
            'arriving_time'=> 'required',
            'tack_off_time'=> 'required',
            'passengers'=> 'numeric',
        ];

    }

    public function messages(){
        return [

            'price_adult.required'=>'هذا الحقل مطلوب ',
            'price_adult.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'child_price.required'=>'هذا الحقل مطلوب ',
            'child_price.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'from.required'=>'هذا الحقل مطلوب ',
            'from.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'to.required'=>'هذا الحقل مطلوب ',
            'to.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'passengers.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'arriving_time.required'=>'هذا الحقل مطلوب ',
            'arriving_time.time'=>'هذا الحقل يجب ان يكون وقت فقط',


            'tack_off_time.required'=>'هذا الحقل مطلوب ',
            'tack_off_time.time'=>'هذا الحقل يجب ان يكون وقت فقط',
        ];
    }
}
