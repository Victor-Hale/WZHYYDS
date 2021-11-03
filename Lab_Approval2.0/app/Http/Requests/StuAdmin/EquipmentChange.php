<?php

namespace App\Http\Requests\StuAdmin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EquipmentChange extends FormRequest
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
            'equipment_dapartment'=>'required',
            'equipment_use'=>'required',
            'equipment_usetime1'=>'required',
            'equipment_usetime2'=>'required',
            'equipment_applicant'=>'required',
            'equipment_phone'=>'required',
            'list'=>'required',
            'inventory_name'=>'required',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
