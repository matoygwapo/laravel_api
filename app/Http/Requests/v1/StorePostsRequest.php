<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;


class StorePostsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>['required'],
            'description'=>['required']
        ];
    }
}
