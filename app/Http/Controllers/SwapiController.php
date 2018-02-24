<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SWAPI\SWAPI;

class SwapiController extends Controller
{


    function get_planet(){

            $swapi = new SWAPI();

            $plan = $swapi->planets()->get(1);
//            dd($plan);
            return view('planets', ['planet'=> $plan]);
        }
    
}
