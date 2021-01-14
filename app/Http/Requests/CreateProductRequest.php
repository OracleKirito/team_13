<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'platform' => 'required|string|min:2|max:191',
            'p_name' => 'required|string|min:2|max:191',
            'price' => 'required|numeric|min:1|max:9999999999',
            'company' => 'required|numeric|min:1|max:9999999999',
            'inventory' => 'required|numeric|min:0|max:9999999999',
        ];
    }

    public function messages()
    {
        return [
            "platform.required" => "平台名稱 為必填",
            "platform.min" => "平台名稱 至少需2個字元",
            "p_name.required" => "商品名稱 為必填",
            "p_name.min" => "商品名稱 至少需2個字元",
            "price.required" => "價格 為必填",
            "price.min" => "價格 範圍必須介於1~9999999999之間",
            "price.max" => "價格 範圍必須介於1~9999999999之間",
            "price.numeric"=>"價格 必須是數字",
            "company.required" => "公司編號 為必填",
            "company.min" => "公司編號 範圍必須介於1~9999999999之間",
            "company.max" => "公司編號 範圍必須介於1~9999999999之間",
            "company.numeric"=>"公司編號 必須是數字",
            "inventory.required" => "庫存 為必填",
            "inventory.min" => "庫存 範圍必須介於0~9999999999之間",
            "inventory.max" => "庫存 範圍必須介於0~9999999999之間",
            "inventory.numeric"=>"庫存 必須是數字"
        ];
    }
}
