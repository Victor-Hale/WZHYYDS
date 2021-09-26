<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Completion6Request extends FormRequest
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
            'ig1' =>'required',
            'rg1' => 'required',
            'e' =>'required',
            'ra' =>'required',
            'e1' => 'required',
            'i' => 'required',
            'ig2' => 'required',
            'r1' => 'required',
            'e2' =>  'required',
            'rb' =>'required',
            'rg2' => 'required',
            'r2' =>  'required',
            'r3' => 'required',
            'r4' => 'required',
            'rx' =>'required',
            'p1' => 'required',
            'p2' => 'required',
            'pd1' => 'required',
            'pd2' => 'required',
            'pd3' => 'required',
            'grade_xp' => 'required',
            'student_id' => 'required',
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
