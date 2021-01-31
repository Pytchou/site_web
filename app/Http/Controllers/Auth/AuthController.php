<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AuthController extends BaseController
{
    //

    protected function register_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'lastname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'agree' => ['required']
        ], array_merge(User::generate_error('lastname'), User::generate_error('name'), User::generate_error('email'), User::generate_error('password'), User::generate_error('agree')));


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return Redirect::route("register-insert-data", $request);

    }

    protected function register_insert_data(Request $request){
        return "ok";
    }

}
