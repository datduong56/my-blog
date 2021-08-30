<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StorePostRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'thumbnail' => 'url'
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A nice title is required for the post.',
            'content.required' => 'Please add content for the post.',
            'summary.required' => 'Please add a nice summary for the post.',
            'thumbnail.url' => 'Thumbnail must be image link.'
        ];
    }
}
