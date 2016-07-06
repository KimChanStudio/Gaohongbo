<?php

namespace App\Http\Requests\admin;

use App\Http\Requests\Request;

class AddPostRequest extends Request
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
    public function rules(\Illuminate\Http\Request $request)
    {
        //dump($request);
        return [
            'title' => 'required|min:1|max:40',
            'source' => 'required|max:30',
            'abstract'   => 'required|min:1|max:140',
            'feature' => 'url',
            'content' => 'required|min:1|max:65535',
        ];
    }
}
