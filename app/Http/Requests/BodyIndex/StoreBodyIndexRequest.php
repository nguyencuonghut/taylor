<?php

namespace App\Http\Requests\BodyIndex;

use Illuminate\Foundation\Http\FormRequest;

class StoreBodyIndexRequest extends FormRequest
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
            'co' => 'required',
            'vai' => 'required',
            'nguc' => 'required',
            'eo' => 'required',
            'bung' => 'required',
            'mong' => 'required',
            'dui' => 'required',
            'dung' => 'required',
            'dai_than' => 'required',
            'dai_tay' => 'required',
            'bap_tay' => 'required',
            'ha_eo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'co.required' => 'Yêu cầu bạn PHẢI điền số đo"Ngực"',
            'vai.unique' => 'Yêu cầu bạn PHẢI điền số đo "Vai"',
            'nguc.unique' => 'Yêu cầu bạn PHẢI điền số đo "Ngực"',
            'eo.required' => 'Yêu cầu bạn PHẢI điền số đo "Eo"',
            'bung.required' => 'Yêu cầu bạn PHẢI điền số đo "Bụng"',
            'mong.required' => 'Yêu cầu bạn PHẢI điền số đo "Mông"',
            'dui.required' => 'Yêu cầu bạn PHẢI điền số đo "Đùi"',
            'dung.required' => 'Yêu cầu bạn PHẢI điền số đo "Đũng"',
            'dai_than.required' => 'Yêu cầu bạn PHẢI điền số đo "Dài thân"',
            'dai_tay.required' => 'Yêu cầu bạn PHẢI điền số đo "Dài tay"',
            'bap_tay.required' => 'Yêu cầu bạn PHẢI điền số đo "Bắp tay"',
            'ha_eo.required' => 'Yêu cầu bạn PHẢI điền số đo "Hạ eo"',
        ];
    }
}
