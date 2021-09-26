<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Completion1Request extends FormRequest
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
            'r1' => 'required',
            'r2' => 'required',
            'r3' => 'required',
            'r4' => 'required',
            'r5' => 'required',
            'r6' => 'required',
            'r7' => 'required',
            'r8' => 'required',
            'r9' => 'required',
            'r10' => 'required',
            'student_id' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }
}
