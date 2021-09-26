<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StudentRequest extends FormRequest
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
            'student_name' => 'required',
            'student_level' => 'required',
            'student_spec' => 'required',
            'student_year' => 'required',
            'student_class' => 'required',
            'student_num' => 'required',
            'experiment_name' => 'required',
            'course_name' => 'required',
            'student_date' => 'required',
            'student_teacher' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator){
        
        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }

}
