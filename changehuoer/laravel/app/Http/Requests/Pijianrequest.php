<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Pijianrequest extends FormRequest
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
            'student_id' => 'required',
            'ds1'=>'required',
            'ds2'=>'required',
            'ds3'=>'required',
            'ds4'=>'required',
            'ds5'=>'required',
            'ds6'=>'required',
            'l1'=>'required',
            'l2'=>'required',
            'l3'=>'required',
            'm'=>'required',
            'd'=>'required',
            'sk1'=>'required',
            'sk2'=>'required',
            'pd1'=>'required',
            'pd2'=>'required',
            'pd3'=>'required',
            'grade_xp' => 'required',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }

}
