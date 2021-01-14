<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePurchaseRequest extends FormRequest
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
            'b_number' => 'required|string|min:8|max:20',
            'b_date' => 'required',
            'serial_number' => 'required|string|min:10|max:20',
            'a_id' => 'required|numeric|min:1|max:99999999',
            'p_id' => 'required|numeric|min:1|max:99999999',
        ];
    }

    public function messages()
    {
        return [
            "b_number.required" => "訂單編號 為必填",
            "b_number.min" => "訂單編號 至少需8個字元",
            "b_number.max" => "訂單編號 最多20個字元",
            "b_date.required" => "購買日期 為必填",
            "serial_number.required" => "序號 為必填",
            "serial_number.min" => "序號 至少需10個字元",
            "serial_number.max" => "序號 最多20個字元",
            "a_id.required" => "會員編號 為必填",
            "a_id.min" => "會員編號 範圍必須介於1~99999999之間",
            "a_id.numeric"=>"會員編號必須是數字",
            "p_id.required" => "商品編號 為必填",
            "p_id.min" => "商品編號 範圍必須介於0~9999999999之間",
            "p_id.numeric"=>"商品編號必須是數字"
        ];
    }
}
