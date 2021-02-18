<?php

namespace App\Http\Controllers\Auth;

use App\Mail\Registered_Partner;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            return redirect('/benevole/register2')->withErrors($validator);
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



    protected function volunteer_login(){
        if(isset($_SESSION['session'])){
            return Redirect::route('benevole_dashboard');
        }else{
            return view("auth.volunteer.login");
        }
    }

    protected function volunteer_login_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:255']
        ], array_merge(User::generate_error('email'), User::generate_error('password')));

        if ($validator->fails()){
            return redirect('/benevole/login_check_sql')->withErrors($validator);
        }

        return Redirect::route("login_check_sql", $request);
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

    protected function voluteer_dashboard(){

        if(isset($_SESSION['session'])){
            return view('auth.volunteer.dashboard');
        }else{
            return Redirect::route('volunteer_login');
        }

    }

    protected function form1_partner_validator(Request $request){
        $validator = Validator::make($request->all(), [
            'name_partner' => ['required', 'string'],
            'max_partner' => ['required', 'integer', 'max:11'],
            'siret' => ['string'],
            'naf' => ['string'],
            'phone' => ['required', 'string', 'max:14'],
            'contact' => ['required', 'string']
        ], array_merge(User::generate_error('name_partner'), User::generate_error('max_partner'), User::generate_error('siret'), User::generate_error('naf'),
            User::generate_error('phone'), User::generate_error('contact')));

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return view('auth.partner.register2',[
            'name_partner' => $request->name_partner,
            'max_partner' => $request->max_partner,
            'siret' => $request->siret,
            'naf' => $request->naf,
            'phone' => $request->phone,
            'contact' => $request->contact
        ]);
    }

    protected function form2_partner_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'name_partner' => ['required', 'string'],
            'max_partner' => ['required', 'string', 'max:11'],
            'siret' => ['string'],
            'naf' => ['string'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'string'],
            'address' => ['required', 'string'],
            'address_details' => ['string'],
            'zip' => ['required', 'integer'],
            'city' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            'agree' => ['required']
        ], array_merge(User::generate_error('name_partner'), User::generate_error('max_partner'), User::generate_error('siret'),
            User::generate_error('naf'), User::generate_error('phone'), User::generate_error('email'),
            User::generate_error('contact'), User::generate_error('address'), User::generate_error('address_details'),
            User::generate_error('city'), User::generate_error('agree')));

        if ($validator->fails()){
            return redirect('/partenaire/register2')->withErrors($validator);
        }


        return Redirect::route("register_partner_insert_data", $request);
    }

    protected function register_partner_insert_data(Request $request){

        dd(Mail::to('locascio.clement@gmail.com')->send(new Registered_Partner($request, Hash::make('confirmation_token'))), Hash::make('confirmation_token'));
        Partner::create([
            'name' => $request->name_partner,
            'volunteers_max_score' => $request->max_partner,
            'siret' => $request->siret,
            'naf' => $request->naf,
            'confirmation_token' => Hash::make('confirmation_token'),
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->contact,
            'address' => $request->address,
            'address_details' => $request->address_details,
            'zip' => $request->zip,
            'city' => $request->city,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'agree' => $request->agree,
        ]);

        return Redirect::route('welcome')->with('success', "Votre compte a bien été crée.
        Nous allons procéder à une vérification des informations que vous avez renseigné.
        Vous receverez un email de confimation d'ici quelques jours.");

    }

    protected function register_partner_confirm_data($name_partner, $token){
        dd($name_partner, $token);
    }

}
