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
            'price_child' => 'required|numeric',
            'from'=> 'required',
            'to'=> 'required',
            'leaving_date'=> 'required',
            'arriving_date'=> 'required',
            'passengers'=> 'numeric|nullable',
        ];

    }

    public function messages(){
        return [

            'price_adult.required'=>'هذا الحقل مطلوب ',
            'price_adult.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'price_child.required'=>'هذا الحقل مطلوب ',
            'price_child.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'from.required'=>'هذا الحقل مطلوب ',
            'from.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'to.required'=>'هذا الحقل مطلوب ',
            'to.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'passengers.numeic'=>'هذا الحقل يجب ان يكون رقم فقط',

            'leaving_date.required'=>'هذا الحقل مطلوب ',
            'leaving_date.date'=>'هذا الحقل يجب ان يكون وقت فقط',


            'arriving_date.required'=>'هذا الحقل مطلوب ',
            'arriving_date.date'=>'هذا الحقل يجب ان يكون وقت فقط',
        ];
    }
}
