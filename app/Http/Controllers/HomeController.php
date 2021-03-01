<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Fonction qui génère la vue HTML contenant la page d'accueil
     *
     * @return \Illuminate\Contracts\View\View  Retourne une vue
     *
     * @author Clément
     */
    public function get_home_view(){
        $partners = Partner::all();
        return view('welcome')->with([
            'partners' => $partners
        ]);
    }

}
