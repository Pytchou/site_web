<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class DataController Génère les données répétés plusieurs fois dans les différentes méthodes des controlleurs
 * @package App\Http\Controllers
 */
class DataController extends Controller
{
    //

    /**
     * Fonction qui récupère la latitude et la longitude d'une adresse postale
     *
     * @param $address Adresse de l'utilisaeur
     * @param $zip Code postal de l'utilisaeur
     * @param $city Ville de l'utilisaeur
     *
     * @return array Retourne un tableu avec la latitude et la longitude de l'adresse
     * @return \Illuminate\Http\RedirectResponse|mixed Ou Retourne une redirection vers un URI
     *
     * @author Clément
     */

    static function get_lat_lng($address, $zip, $city ) {

        $address = str_replace(" ", "+", $address);
        $zip = str_replace(" ", "+", $zip);
        $city = str_replace(" ", "+", $city);
        $key = env('GOOGLE_GEOCODE_KEY');

        $url = "https://maps.google.com/maps/api/geocode/json?key=$key&address=$address,$zip,$city";
        $response = file_get_contents($url);

        $json = json_decode($response,TRUE);

        if($json['status'] == 'OK'){
            return $json['results'][0]['geometry']['location'];
        }else{
            return Redirect::route('welcome')->with('error', "Une erreur c'est produite lors de la récupération de
            la latitude et la longitude de l'adresse postal");
        }
    }

    /**
     * Fonction qui génère un talbeau avec les variables pour les vues
     *
     * @param $request Récupère les donnéees envoyés par le formulaire
     *
     * @return array Exemple: ['id' => 1, 'name_partner'=> 'John', ...]
     *
     * @author Clément
     */
    static function get_confirm_data_view($request){
        return [
            'id' => $request->id,
            'name_partner' => $request->name_partner,
            'max_partner' => $request->max_partner,
            'siret' => $request->siret,
            'naf' => $request->naf,
            'phone' => $request->phone,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'address_details' => $request->address_details,
            'zip' => $request->zip,
            'city' => $request->city
        ];
    }
}
