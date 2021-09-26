<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class completion8Request extends FormRequest
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
            'rg' => 'required',
            'rm' => 'required',
            'r1' => 'required',

            'xz1' => 'required',
            'xz2' => 'required',
            'xz3' => 'required',
            'xz4' => 'required',

            'student_id' => 'required',
            'grade_xp' => 'required',

            'reduce1' => 'required',
            'reduce2' => 'required',
            'reduce3' => 'required',
            'reduce4' => 'required',
            'reduce5' => 'required',

            'increase1' => 'required',
            'increase2' => 'required',
            'increase3' => 'required',
            'increase4' => 'required',
            'increase5' => 'required',


            'average1' => 'required',
            'average2' => 'required',
            'average3' => 'required',
            'average4' => 'required',
            'average5' => 'required',

            'error1' => 'required',
            'error2' => 'required',
            'error3' => 'required',
            'error4' => 'required',
            'error5' => 'required',



            'red1' => 'required',
            'red2' => 'required',
            'red3' => 'required',
            'red4' => 'required',
            'red5' => 'required',

            'inc1' => 'required',
            'inc2' => 'required',
            'inc3' => 'required',
            'inc4' => 'required',
            'inc5' => 'required',


            'ave1' => 'required',
            'ave2' => 'required',
            'ave3' => 'required',
            'ave4' => 'required',
            'ave5' => 'required',

            'err1' => 'required',
            'err2' => 'required',
            'err3' => 'required',
            'err4' => 'required',
            'err5' => 'required',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }


}
