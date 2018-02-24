<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SWAPI\SWAPI;
use JavaScript;

class SwapiController extends Controller
{


    function get_planet(){

            $swapi = new SWAPI();

            $plan = $swapi->planets()->get(1);
//            dd($plan->name)
            JavaScript::put([
                'planet_name' => $plan->name,
                'planet_diameter' => $plan->diameter,
                'planet_rotation' => $plan->rotation_period,
                'planet_period' => $plan->orbital_period,
                'planet_gravity' => $plan->gravity,
                'planet_population' => $plan->population,
                'planet_climate' => $plan->climate,
                'planet_terrain' => $plan->terrain,
                'planet_water' => $plan->surface_water,
            ]);
//            dd($plan);
            return view('planets', ['planet'=> $plan]);
        }

}
