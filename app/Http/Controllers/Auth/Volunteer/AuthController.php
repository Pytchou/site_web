<?php

namespace App\Http\Controllers\Auth\Volunteer;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ErrorController;


/**
 * Class AuthController  Méthodes d'authentifications des bénévoles
 *
 * @package App\Http\Controllers\Auth\Volunteer
 *
 * @author Clément
 */

class AuthController extends BaseController
{


    /**
     * Génère la vue HTML contenant le premier formulaire pour l'inscription
     *
     * @return \Illuminate\Contracts\View\View  Retourne une vue
     *
     * @author Clément
     */

    public function get_Register_Form1(){
        return view('auth.volunteer.register.register');
    }

    /**
     * Validate si les donnes sont bien des string, avec une longeur max de X, ...
     *
     * @param Request $request Récupère les donnéees envoyés par le formulaire
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     *
     * @author Clément
     */

    public function get_form1_volunteer_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'partner' => ['required', 'string'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:14']
        ], array_merge(ErrorController::generate_error('firstname'), ErrorController::generate_error('lastname'),
            ErrorController::generate_error('email'), ErrorController::generate_error('phone')));


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return view('auth.volunteer.register.register2',[
            'partner' => $request->partner,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

    }

    /**
     * Récupère la view HTML pour le deuxième formulaire d'enregistrement
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     *
     * @author Clément
     */
    public function get_Register_Form2(){
        return view('auth.volunteer.register.register2');
    }


    /**
     * Validate si les donnes sont bien des string, avec une longeur max de X, ... ET les ajoutent en BDD
     *
     * @param Request $request Récupère les donnéees envoyés par le formulaire
     *
     * @return \Illuminate\Http\RedirectResponse Retourne une redirection vers un URI
     *
     * @author Clément
     */
    public function get_form2_volunteer_validator(Request $request){

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
        ], array_merge(ErrorController::generate_error('firstname'), ErrorController::generate_error('lastname'),
            ErrorController::generate_error('email'),
            ErrorController::generate_error('password'), ErrorController::generate_error('phone'),
            ErrorController::generate_error('address'),
            ErrorController::generate_error('address_detail'),ErrorController::generate_error('zip'), ErrorController::generate_error('city'),
            ErrorController::generate_error('agree')));

        if ($validator->fails()){
            return redirect('/benevole/register2')->with([
                'partner' => $request->partner,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'address_details' => $request->address_details,
                'zip' => $request->zip,
                'city' => $request->city,
                'agree' => $request->agree
            ]);
        }

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'address_details' => $request->address_details,
            'zip' => $request->zip,
            'city' => $request->city,
            'dashboard_view_name' => 'dashboard',
        ]);

        return Redirect::route("get_volunteer_login");
    }


    /**
     * Récupère la view HTML pour le formulaire d'enregistrement
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     *
     * @author Clément
     */
    public function get_volunteer_login(){
        return view("auth.volunteer.login.login");
    }

    /**
     *  Valide si les donnes sont bien des string, avec une longeur max de X, ... ET connecte l'utilisateur
     *
     * @param Request $request Récupère les donnéees envoyés par le formulaire
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     * @return \Illuminate\Routing\Redirector Ou Retourne une redirection vers un URI
     *
     * @author Clément
     */
    public function get_volunteer_login_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:255']
        ], array_merge(ErrorController::generate_error('email'), ErrorController::generate_error('password')));

        if ($validator->fails()){
            return redirect('/benevole/login_check_sql')->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('benevole/dashboard');
        }else{
            return view('auth.volunteer.login.login' ,[
                'error' => 'Votre email et/ou votre mot de passe ne correspondent pas.'
            ]);
        }
    }


    /**
     * Vérifie si l'utisalteur est connecté puis charge la vue
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     * @return \Illuminate\Routing\Redirector Ou Retourne une redirection vers un URI
     *
     * @author Clément
     */

    public function get_voluteer_dashboard(){
        if(Auth::check()){
            $user = User::where('id', Auth::id())->first();
            return view("auth.volunteer.dashboard.". $user->dashboard_view_name);
        }else{
            return Redirect::route("volunteer_login");
        }
    }

}
