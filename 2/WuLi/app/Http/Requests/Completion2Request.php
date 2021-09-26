<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Completion2Request extends FormRequest
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
            'id'  => 'required',
            'ra1' => 'required',
            'ra2' => 'required',
            'ra3' => 'required',
            'rx'  => 'required',
            'rx1' => 'required',
            'rx2' => 'required',
            'rx3' => 'required',
            'rb1' => 'required',
            'rb2' => 'required',
            'rb3' => 'required',
            'rchange1a' => 'required',
            'rchange2a' => 'required',
            'rchange3a' => 'required',
            's1' => 'required',
            's2' => 'required',
            's3' => 'required',
            's'   => 'required',
            'rc1' => 'required',
            'rc2' => 'required',
            'rc3' => 'required',
            'rwait1' => 'required',
            'rwait2' => 'required',
            'rwait3' => 'required',
            'rxx' => 'required',
            'rd1' => 'required',
            'rd2' => 'required',
            'rd3' => 'required',
            'rchange1b' => 'required',
            'rchange2b' => 'required',
            'rchange3b' => 'required',
            'ss1' => 'required',
            'ss2' => 'required',
            'ss3' => 'required',
            'ss' => 'required',
            'student_id' => 'required',
            'xz1' => 'required',
            'xz2' => 'required',
            'pd1' => 'required',
            'pd2' => 'required',

        ];
    }

    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }
}
