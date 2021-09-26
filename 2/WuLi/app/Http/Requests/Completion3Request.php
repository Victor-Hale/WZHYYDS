<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class Completion3Request extends FormRequest
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
            'l1' => 'required',
            'l2' => 'required',
            'l3' => 'required',
            'l4' => 'required',
            'l5' => 'required',
            'd1' => 'required',
            'd2' => 'required',
            'd3' => 'required',
            'd4' => 'required',
            'd5' => 'required',
            't1' => 'required',
            't2' => 'required',
            't3' => 'required',
            't4' => 'required',
            't5' => 'required',
            'la' => 'required',
            'da' => 'required',
            'ta' => 'required',
            'l6' => 'required',
            't6' => 'required',
            'g'  => 'required',
            'n1' => 'required',
            'n2' => 'required',
            'n3' => 'required',
            'n4' => 'required',
            'n5' => 'required',
            'n6' => 'required',
            'y1' => 'required',
            'y2' => 'required',
            'xz1' => 'required',
            'xz2' => 'required',
            'student_id'=>'required',
            'grade_xp'=>'required',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }


}
