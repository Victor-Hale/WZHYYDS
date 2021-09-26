<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExperimentRequest extends FormRequest
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
            'completion_1' => 'required',
            'completion_2' => 'required',
            'completion_3' => 'required',
            'completion_4' => 'required',
            'completion_5' => 'required',
            'completion_6' => 'required',
            'completion_l1' => 'required',
            'completion_l2' => 'required',
            'completion_l3' => 'required',
            'completion_m' => 'required',
            'completion_d' => 'required',
            'completion_xz1' => 'required',
            'completion_xz2' => 'required',
            'completion_pd1' => 'required',
            'completion_pd2' => 'required',
            'completion_pd3' => 'required',
        ];
    }
    protected function failedValidation(Validator $validator){
        
        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }
}
