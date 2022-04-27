<?php

namespace App\Http\Requests\Offer;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|unique:offers',
            'position' => 'required|integer|unique:offers',
            'image' => 'nullable|dimensions:min_width=100,min_height=100',
        ];
    }

    public function messages()
    {
        return [
            'image.nullable'    => "Image is required.",
            'position.required' => "position is required.",
            'position.integer'  => 'position must be Number.',
            'position.unique'   => 'position has already been taken.',
            'image.image'       => 'Invalid image.',
            'image.dimensions'  => 'Invalid image dimension.',
        ];
    }
}
