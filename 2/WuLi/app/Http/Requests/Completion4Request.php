<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class Completion4Request extends FormRequest
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
            //
            'n1' => 'required',
            'n5' => 'required',
            'n10' => 'required',
            'n15' => 'required',
            'n20' => 'required',
            'n25' => 'required',
            'n30' => 'required',
            'n35' => 'required',
            'n40' => 'required',
            'r' => 'required',
            'xz1' => 'required',
            'xz2' => 'required',
            'xz3' => 'required',
            'xz4' => 'required',
            'pd1' => 'required',
            'pd2' => 'required',
            'pd3' => 'required',
            'student_id' => 'required',
            'l1' => 'required',
            'l2' => 'required',
            'l3' => 'required',
            'l4' => 'required',
            'l5' => 'required',
            'l6' => 'required',
            'l7' => 'required',

        ];
    }  protected function failedValidation(Validator $validator){

    throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
}
}
