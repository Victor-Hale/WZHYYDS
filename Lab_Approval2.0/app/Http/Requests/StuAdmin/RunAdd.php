<?php

namespace App\Http\Requests\StuAdmin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RunAdd extends FormRequest
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
            'run_id'=>'required',
            'run_week'=>'required',
            'run_time'=>'required',
            'run_class'=>'required',
            'run_name'=>'required',
            'run_number'=>'required',
            'run_cname'=>'required',
            'run_type'=>'required',
            'run_teacher'=>'required',
            'run_situation'=>'required',
            'run_note'=>'required',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
