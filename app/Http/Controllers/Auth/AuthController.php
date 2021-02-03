<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AuthController extends BaseController
{

    protected function form1_volunteer_validator(Request $request){


        $validator = Validator::make($request->all(), [
            'partner' => ['required', 'string'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:14']
        ], array_merge(User::generate_error('firstname'), User::generate_error('lastname'), User::generate_error('email'), User::generate_error('phone')));


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return view('auth.register2',[
            'partner' => $request->partner,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

    }

    protected function form2_volunteer_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'partner' => ['required', 'string'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:14'],
            'address' => ['required', 'string', 'max:255'],
            'address_details' => ['string', 'max:255'],
            'zip' => ['required','string', 'max:5'],
            'city' => ['required','string', 'max:100'],
            'agree' => ['required']
        ], array_merge(User::generate_error('firstname'), User::generate_error('lastname'), User::generate_error('email'),
            User::generate_error('phone'), User::generate_error('address'), User::generate_error('address_detail'),
            User::generate_error('zip'), User::generate_error('city'), User::generate_error('agree')));



        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return Redirect::route("register_volunteer_insert_data", $request);
    }

    protected function register_volunteer_insert_data(Request $request){

        User::create([
            'partner' => $request->partner,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'address_details' => $request->address_details,
            'zip' => $request->zip,
            'city' => $request->city,
            'agree' => $request->agree,
        ]);
    }

    protected function form1_partner_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'volunteers_max_score' => ['required', 'integer'],
            'siret' => ['string', 'max:14'],
            'naf' => ['string', 'max:8'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'address' => ['required', 'string', 'max:255'],
            'address_details' => ['string', 'max:255'],
            'zip' => ['required','string', 'max:5'],
            'city' => ['required', 'string'],
            'longitude' => ['decimal', 'max:12'],
            'latitude' => ['decimal', 'max:12'],
            'agree' => ['required']
        ], array_merge(User::generate_error('name'), User::generate_error('volunteers_max_score'), User::generate_error('siret'),
            User::generate_error('naf'), User::generate_error('phone'), User::generate_error('email'),
            User::generate_error('address'), User::generate_error('address'), User::generate_error('address_details'),
            User::generate_error('zip'), User::generate_error('city'), User::generate_error('logitude'),
            User::generate_error('latitude'), User::generate_error('agree')));



        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return Redirect::route("register_volunteer_insert_data", $request);
    }

    protected function register_partner_insert_data(Request $request){

        User::create([
            'name' => $request->name,
            'volunteers_max_score' => $request->volunteers_max_score,
            'siret' => $request->siret,
            'naf' => $request->naf,
            'phone' => $request->phone,
            'email' => $request->email,
            'adress' => $request->adress,
            'address_details' => $request->address_details,
            'zip' => $request->zip,
            'city' => $request->city,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'agree' => $request->agree,
        ]);
    }

}
