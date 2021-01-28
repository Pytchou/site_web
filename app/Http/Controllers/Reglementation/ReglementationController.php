<?php

namespace App\Http\Controllers\Reglementation;

use Illuminate\Routing\Controller as BaseController;

class ReglementationController extends BaseController
{
    /*
     * Fonction qui affiche la vue cgu
     */
    protected function index_cgu(){
        return view('reglementation.cgu');
    }

    /*
     * Fonction qui affiche la vue rgpd
     */
    protected function index_rgpd(){
        return view('reglementation.rgpd');
    }

    /*
     * Fonction qui affiche la vue mentions legales
     */
    protected function index_mentions_legales(){
        return view('reglementation.mentions-legales');
    }

}
