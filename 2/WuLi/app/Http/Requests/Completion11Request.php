<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class Completion11Request extends FormRequest
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
            'one_ig' => 'required',
            'one_rg' => 'required',
            'one_e' => 'required',

            'two_one_rg' => 'required',
            'two_one_ig' => 'required',
            'two_one_im' => 'required',

            'two_one_r1' => 'required',
            'two_two_rn' => 'required',
            'two_two_im' => 'required',

            'two_two_vm' => 'required',
            'two_two_im2' => 'required',
            'two_two_rn2' => 'required',
            'two_two_r2' => 'required',

            'two_thr_e' => 'required',
            'two_thr_im2' => 'required',
            'two_thr_rn' => 'required',
            'two_thr_r42' => 'required',
            'two_four_e' => 'required',
            'two_four_r4' => 'required',
            'two_four_rn4' => 'required',
            'two_four_r3' => 'required',

            'thr_one_r1' => 'required',
            'thr_one_ix' => 'required',
            'thr_one_ds' => 'required',
            'thr_two_r2' => 'required',
            'thr_two_vx' => 'required',
            'thr_two_ds' => 'required',
            'thr_thr_r4' => 'required',
            'thr_thr_r3' => 'required',
            'thr_thr_rx' => 'required',
            'thr_thr_ds' => 'required',

            'four_one_r1' => 'required',
            'four_one_r2' => 'required',
            'four_one_r3' => 'required',
            'four_one_r4' => 'required',
            'four_one_ix' => 'required',

            'four_two_1' => 'required',
            'four_two_2' => 'required',
            'four_two_3' => 'required',
            'four_two_4' => 'required',
            'four_two_5' => 'required',

            //
        ];
    }
    protected function failedValidation(Validator $validator){

        throw(new HttpResponseException(json_fail('参数错误',$validator->errors()->all(),422)));
    }
}
