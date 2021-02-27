<?php

namespace App\Models;

use Illuminate\Contracts\Notifications\Dispatcher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class Partner extends Model
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'partners';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'volunteers_max_score',
        'siret',
        'naf',
        'confirmation_token',
        'phone',
        'email',
        'password',
        'contact',
        'address',
        'address_details',
        'zip',
        'city',
        'longitude',
        'latitude'
    ];

    /**
     * Send the given notification.
     *
     * @param  mixed  $instance
     * @return void
     */
    public function notify($instance)
    {
        app(Dispatcher::class)->send($this, $instance);
    }

    static public function get_lat_lng( $address, $zip, $city ) {

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

    static public function get_confirm_data_view($request){
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
