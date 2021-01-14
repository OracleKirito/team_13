<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMemberRequest extends FormRequest
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
            'a_name' => 'required|string|min:2|max:191',
            'birth' => 'required',
            'account' => 'required|string|min:6|max:191',
            'password' => 'required|string|min:6|max:191',
            'balance' => 'required|numeric|min:0|max:9999999999',
        ];
    }

    public function messages()
    {
        return [
            "a_name.required" => "會員名稱 為必填",
            "a_name.min" => "會員名稱 至少需2個字元",
            "birth.required" => "生日 為必填",
            "account.required" => "帳戶 為必填",
            "account.min" => "帳戶 至少需6個字元",
            "password.required" => "密碼 為必填",
            "password.min" => "密碼 至少需6個字元",
            "balance.required" => "餘額 為必填",
            "balance.min" => "餘額 範圍必須介於0~9999999999之間",
            "balance.max" => "餘額 範圍必須介於0~9999999999之間",
            "balance.numeric"=>"餘額必須是數字"
        ];
    }
}
