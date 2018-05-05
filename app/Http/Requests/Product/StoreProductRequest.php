<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'product_type_id' => 'required',
            'material_id' => 'required',
            'texture_type_id' => 'required',
            'price' => 'required',
            'color' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'product_type_id.unique' => 'Yêu cầu bạn PHẢI điền "Loại sản phẩm"',
            'material_id.unique' => 'Yêu cầu bạn PHẢI điền "Chất liệu"',
            'texture_type_id.required' => 'Yêu cầu bạn PHẢI điền "Kiểu dệt"',
            'price.required' => 'Yêu cầu bạn PHẢI điền "Giá"',
            'color.required' => 'Yêu cầu bạn PHẢI điền "Màu sắc"',
        ];
    }
}
