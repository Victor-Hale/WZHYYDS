<?php

namespace App\Http\Requests\StuAdmin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BorrowChange extends FormRequest
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
            'form_id'=>'required',
            'borrow_time'=>'required',
            'borrow_lname'=>'required',
            'borrow_lid'=>'required',
            'borrow_cname'=>'required',
            'borrow_number'=>'required',
            'borrow_goal'=>'required',
            'borrow_promise'=>'required',
            'borrow_applicant'=>'required',
            'borrow_phone'=>'required',
            'time_start_time'=>'required',
            'time_end_time'=>'required',

        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
