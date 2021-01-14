<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
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
            'c_name' => 'required|string|min:2|max:191',
            'c_manager' => 'required|string|min:3|max:191',
            'c_phone' => 'required|string|min:6|max:191',
            'c_address' => 'required|string|min:6|max:191',
        ];
    }

    public function messages()
    {
        return [
            "c_name.required" => "公司名稱 為必填",
            "c_name.min" => "公司名稱 至少需2個字元",
            "c_manager.required" => "公司名稱 為必填",
            "c_manager.min" => "公司名稱 至少需3個字元",
            "c_phone.required" => "電話 為必填",
            "c_phone.min" => "電話 至少需6個字元",
            "c_address.required" => "地址 為必填",
            "c_address.min" => "地址 至少需6個字元",
        ];
    }
}
