<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class Completion14Request extends FormRequest
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
            'student_id' => 'required',
             'b1' => 'required',
             'b2' => 'required',
             'b3' => 'required',
             'b4' => 'required',
             'b5' => 'required',
             'b6' => 'required',
             'b7' => 'required',
             'c1' => 'required',
             'c2' => 'required',
             'c3' => 'required',
             'c4' => 'required',
             'c5' => 'required',
             'c6' => 'required',
             'c7' => 'required',
             'c8' => 'required',
             'c9' => 'required',
             'c10' => 'required',
             'c11' => 'required',
             'c12' => 'required',
             'd1' => 'required',
             'd2' => 'required',
             'd3' => 'required',
             'd4' => 'required',
             'd5' => 'required',
             'd6' => 'required',
             'e1' => 'required',
             'e2' => 'required',
             'e3' => 'required',
             'e4' => 'required',
             'f1' => 'required',
             'f2' => 'required',
             'f3' => 'required',
             'g1' => 'required',
             'g2' => 'required',
             'g3' => 'required',
             'x1' => 'required',
             'x2' => 'required',
             'x3' => 'required',
        ];
    } protected function failedValidation(Validator $validator){

    throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
}
}
