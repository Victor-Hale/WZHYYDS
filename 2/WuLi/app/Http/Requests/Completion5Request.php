<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Completion5Request extends FormRequest
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
            'ra1' => 'required',
            'ra2' => 'required',
            'ra3' => 'required',
            'rx_a1'  => 'required',
            'rx_a2' => 'required',
            'rx_a3' => 'required',
            'rx' => 'required',
            'rb1' => 'required',
            'rb2' => 'required',
            'rb3' => 'required',
            'ra_change1' => 'required',
            'ra_change2' => 'required',
            'ra_change3' => 'required',
            's1' => 'required',
            's2' => 'required',
            's3' => 'required',
            's'   => 'required',
            'rc1' => 'required',
            'rc2' => 'required',
            'rc3' => 'required',
            'rx_b1' => 'required',
            'rx_b2' => 'required',
            'rx_b3' => 'required',
            'rxx' => 'required',
            'rd1' => 'required',
            'rd2' => 'required',
            'rd3' => 'required',
            'rb_change1' => 'required',
            'rb_change2' => 'required',
            'rb_change3' => 'required',
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
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }

}
