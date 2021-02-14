<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Utils;


class AuthController extends BaseController
{

    public function __construct(){
        session_start();
    }

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


        return view('auth.volunteer.register2',[
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
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'phone' => ['required', 'string', 'max:14'],
            'address' => ['required', 'string', 'max:255'],
            'address_details' => ['string', 'max:255'],
            'zip' => ['required','string', 'max:5'],
            'city' => ['required','string', 'max:100'],
            'agree' => ['required']
        ], array_merge(User::generate_error('firstname'), User::generate_error('lastname'), User::generate_error('email'),
            User::generate_error('password'), User::generate_error('phone'), User::generate_error('address'),
            User::generate_error('address_detail'),User::generate_error('zip'), User::generate_error('city'),
            User::generate_error('agree')));

        if ($validator->fails()){
            return redirect('register/form2')->withErrors($validator);
        }


        return Redirect::route("register_volunteer_insert_data", $request);
    }


    protected function register_volunteer_insert_data(Request $request){

        User::create([
            'partner' => $request->partner,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'address_details' => $request->address_details,
            'zip' => $request->zip,
            'city' => $request->city,
            'agree' => $request->agree,
        ]);
        return Redirect::route("volunteer_login");
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

    protected function volunteer_login(){



        if(isset($_SESSION['session'])){
            return Redirect::route('benevole_dashboard');
        }else{
            return view("auth.volunteer.login");
        }
    }

    /*
     * Fonction de vérification et Connexion des comptes
     */

    protected function volunteer_login_check(Request $request){

        $users = DB::select("select * from volunteers");

        foreach ($users as $user){

            if($request->email == $user->email && Hash::check($request->password, $user->password)){

                $_SESSION['session'] = Hash::make($request->email);

                return Redirect::route('benevole_dashboard');
            }else{
                return view('auth.volunteer.login' ,[
                    'error' => 'Votre email et/ou votre mot de passe ne correspondent pas.'
                ]);
            }
        }
    }

}
