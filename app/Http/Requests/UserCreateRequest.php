<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
        $id='';
        if($this->user){
            $id=$this->user->id;
        }
        return [
            'name'=>'required',
            'username'=>'required|alpha_dash|unique:users,username,'.$id,
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required',
        ];
    }
}
