<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AuthController extends BaseController
{

    protected function register_volunteer_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:14'],
            'address' => ['string', 'max:255'],
            //'address_details' => ['string', 'max:255'],
            'zip' => ['string', 'max:5'],
            'city' => ['string', 'max:100'],
            'agree' => ['required']
        ], array_merge(User::generate_error('firstname'), User::generate_error('lastname'), User::generate_error('email'), User::generate_error('phone'), User::generate_error('address'), User::generate_error('address_details'), User::generate_error('zip'), User::generate_error('city')));


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return Redirect::route("register-insert-data", $request);

    }

    protected function register_volunteer_insert_data(Request $request){
        return "ok";
    }

}
