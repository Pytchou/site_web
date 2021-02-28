<?php

namespace App\Http\Controllers\Auth\Partner;

use App\Mail\Registered_Partner;
use App\Mail\Notify_Validate_Account_Partner;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\DataController;


/**
 * Class AuthController Méthodes d'authentifications des bénévoles
 *
 * @package App\Http\Controllers\Auth\Partner
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

    public function get_Partner_Form1(){
        return view('auth.partner.register.register');
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

    public function get_form1_partner_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'name_partner' => ['required', 'string'],
            'max_partner' => ['required', 'integer', 'max:2147483647'],
            'siret' => ['string'],
            'naf' => ['string'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'email']
        ], array_merge(ErrorController::generate_errorr('name_partner'), ErrorController::generate_errorr('max_partner'), ErrorController::generate_errorr('siret'), ErrorController::generate_errorr('naf'),
            ErrorController::generate_errorr('phone'), ErrorController::generate_errorr('email')));

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        return view('auth.partner.register.register2',[
            'name_partner' => $request->name_partner,
            'max_partner' => $request->max_partner,
            'siret' => $request->siret,
            'naf' => $request->naf,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
    }

    /**
     * Génère la vue HTML contenant le deuxièmes formulaires pour l'inscription
     *
     * @return \Illuminate\Contracts\View\View  Retourne une vue
     *
     * @author Clément
     */

    public function get_Partner_Form2(){
        return view('auth.partner.register.register2');
    }

    /**
     * Valide si les donnes sont bien des string, avec une longeur max de X, ... ET Envoie un email de creation
     * de compte au modérateur ET Ajoute l'utilisateur en BDD
     *
     * @param Request $request Récupère les donnéees envoyés par le formulaire
     *
     * @return \Illuminate\Routing\Redirector Retourne une redirection vers un URI
     *
     * @author Clément
     */
    public function get_form2_partner_validator(Request $request){

        $validator = Validator::make($request->all(), [
            'name_partner' => ['required', 'string'],
            'max_partner' => ['required', 'string', 'max:2147483647'],
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
        ], array_merge(ErrorController::generate_errorr('name_partner'), ErrorController::generate_errorr('max_partner'), ErrorController::generate_errorr('siret'),
            ErrorController::generate_errorr('naf'), ErrorController::generate_errorr('phone'), ErrorController::generate_errorr('email'),
            ErrorController::generate_errorr('contact'), ErrorController::generate_errorr('address'), ErrorController::generate_errorr('address_details'),
            ErrorController::generate_errorr('city'), ErrorController::generate_errorr('agree')));

        if ($validator->fails()){
            dd('PB');
            return redirect('/partenaire/register2')->withErrors($validator);
        }

        $partner = Partner::where('email', $request->email)->first();

        if($partner){
            return Redirect::route('welcome')->with('error', "Une association avec le même nom est déjà renseignée
            dans notre base de données.");
        }else{
            $token = str_replace('/', '', Hash::make('confirmation_token'));
            $coor = Partner::get_lat_lng($request->address, $request->zip, $request->city);

            Mail::to('locascio.clement@gmail.com')->send(new Registered_Partner($request, $token));

            Partner::create([
                'name' => $request->name_partner,
                'volunteers_max_score' => $request->max_partner,
                'siret' => $request->siret,
                'naf' => $request->naf,
                'confirmation_token' => $token,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'contact' => $request->contact,
                'address' => $request->address,
                'address_details' => $request->address_details,
                'zip' => $request->zip,
                'city' => $request->city,
                'latitude' => $coor['lat'],
                'longitude' => $coor['lng'],
            ]);

            return Redirect::route('welcome')->with('success', "Votre compte a bien été crée.
            Nous allons procéder à une vérification des informations que vous avez renseigné.
            Vous receverez un email de confimation d'ici quelques jours.");
        }
    }


    /**
     * Permet à un modérateur d'accèder au information d'un utilisateur
     *
     * @param $name_partner Nom de l'utilisateur stocké en BDD
     * @param $token Confirmation_Token de l'utilisateur stocké en BDD
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     *
     * @author Clément
     */
    public function set_register_partner_confirm_data($name_partner, $token){
        $partner = Partner::where('name', $name_partner)->where('confirmation_token', $token)->first();

        if($partner) {
            return view('auth.partner.confirm.confirm1', [
                'partner' => $partner
            ]);
        }else{
            return Redirect::route('welcome')->with('error', "Ce lien ne semble ne plus être valide.");
        }
    }

    /**
     * Valide  si les donnes sont bien des string, avec une longeur max de X, ...
     *
     * @param Request $request Récupère les donnéees envoyés par le formulaire
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     * @return \Illuminate\Http\RedirectResponse Ou Retourne une redirection vers un URI
     *
     * @author Clément
     */
    public function get_register_partner_confirm_form1(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => ['required', 'integer'],
            'name_partner' => ['required', 'string'],
            'max_partner' => ['required', 'integer', 'max:2147483647'],
            'siret' => ['string'],
            'naf' => ['string'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'email']
        ], array_merge(ErrorController::generate_errorr('name_partner'), ErrorController::generate_errorr('max_partner'), ErrorController::generate_errorr('siret'), ErrorController::generate_errorr('naf'),
            ErrorController::generate_errorr('phone'), ErrorController::generate_errorr('email')));

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $partner = Partner::find($request->id);

        if($partner){
            return view('auth.partner.confirm.confirm2')->with(DataController::get_confirm_data_view($request));
        }else{
            return Redirect::route('welcome')->with('error', "Cet utilisateur n'est pas enregistré dans la base de donnée.");
        }
    }

    /**
     * Génère la vue HTML contenant le premier formulaire pour l'inscription
     *
     * @return \Illuminate\Contracts\View\View  Retourne une vue
     *
     * @author Clément
     */

    public function get_Partner_confirm2(){
        return view('auth.partner.confirm.confirm2');
    }

    /**
     * Valide si les donnes sont bien des string, avec une longeur max de X, ... ET met à jour les informations
     * de l'association à jour en BDD ET notifie l'utilisateur de sa confimation de création de compte
     *
     * @param Request $request Récupère les donnéees envoyés par le formulaire
     *
     * @return \Illuminate\Http\RedirectResponse Retourne une redirection vers un URI
     *
     * @author Clément
     */
    public function get_register_partner_confirm_notify(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => ['required', 'integer'],
            'name_partner' => ['required', 'string'],
            'max_partner' => ['required', 'string', 'max:2147483647'],
            'siret' => ['string'],
            'naf' => ['string'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'string'],
            'address' => ['required', 'string'],
            'address_details' => ['string'],
            'zip' => ['required', 'integer'],
            'city' => ['required', 'string'],
        ], array_merge(ErrorController::generate_errorr('name_partner'), ErrorController::generate_errorr('max_partner'), ErrorController::generate_errorr('siret'),
            ErrorController::generate_errorr('naf'), ErrorController::generate_errorr('phone'), ErrorController::generate_errorr('email'), ErrorController::generate_errorr('contact'),
            ErrorController::generate_errorr('address'), ErrorController::generate_errorr('address_details'), ErrorController::generate_errorr('city')));

        if ($validator->fails()){
            return view('auth.partner.confirm.confirm2')->withErrors($validator)->with(DataController::get_confirm_data_view($request));
        }

        $partner = Partner::find($request->id);


        if(isset($partner)){
            $partner->update([
                'name' => $request->name_partner,
                'volunteers_max_score' => $request->max_partner,
                'siret' => $request->siret,
                'naf' => $request->naf,
                'confirmation_token' => null,
                'phone' => $request->phone,
                'email'=> $request->email,
                'contact' => $request->contact,
                'address' => $request->address,
                'address_details' => $request->address_details,
                'zip' => $request->zip,
                'city' => $request->city
            ]);
            Mail::to($request->email)->send(new Notify_Validate_Account_Partner($request));
            return Redirect::route('welcome')->with('success', "Cet utilisateur a bien été confirmée. Un email lui
            expliquant comment se connecter lui a été envoyé.");
        }else{
            return Redirect::route('welcome')->with('error', "Cet utilisateur n'est pas enregistré dans la base de donnée.");
        }
    }

    /**
     * Génère la view HTML de validation des données de l'utiilisateur par le modérateur
     *
     * @return \Illuminate\Contracts\View\View Retourne une vue
     *
     * @author Clément
     */
    public function get_volunteer_login(){
        return view("auth.partner.login.login");
    }
}
