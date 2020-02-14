<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name' => ['required', 'string'],
            // 'code' => ['required', 'string'],
            // 'price' => ['required'],
            // 'detail' => ['string'],
            // 'image_url' => ['required', 'image', 'mimes: jpeg, png, jpg, gif, svg', 'max:2048'],
            // 'product_category_id' => ['required', 'int'],
            // 'product_type_id' => ['required', 'int'],
        ];
    }
}
