<?php

namespace App\Http\Requests\user;

use App\Http\Requests\Request;
use Illuminate\Http\Request as Request_sub;

class EditProfileRequest extends Request
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
    public function rules(Request_sub $request)
    {
        $id = $request->input('id');
        return [
            'last_name'  => 'min:1|max:4|regex:/^[\x80-\xff]{0,}$/',
            'first_name' => 'min:1|max:4|regex:/^[\x80-\xff]{0,}$/',
            'region'     => 'between:1,7',
            //'cellphone'  => ['unique:users', 'regex:/^1[3|5|7|8][0-9]{9}$/'],
            'cellphone'  => 'regex:/^1[3|5|7|8][0-9]{9}$/',
            'cellphone'  => 'unique:users,cellphone,'.$id,
            'qqnumber'  => 'min:5|max:12|regex:/^[1-9][0-9]{4,12}$/|unique:users,qqnumber,'.$id,
            'birthday'   => 'date',
        ];
    }
}
