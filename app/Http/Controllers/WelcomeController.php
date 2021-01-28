<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    //

    protected function telephone(){

        $i = 0;
        $nb = rand(0,9);
        $tab = [];


        while (True){
            if($i < 10){

                random_int(0,9);

                $i = $i +1;
            }

        }

    }


    protected function index(){

        dd($this->telephone());

        return view('welcome',[

        ]);

    }
}
