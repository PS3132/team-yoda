<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SWAPI\SWAPI;
use JavaScript;

class SwapiController extends Controller
{


    function get_planet($id){

            $swapi = new SWAPI();

            $plan = $swapi->planets()->get($id);

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
            return view('planets', ['planet'=> $plan]);
        }

    function get_planets(){

        $swapi = new SWAPI();

        $plan_data = $swapi->planets()->index();

//        JavaScript::put([
//            'planet_data' => $plan_data->get('storage'),
//        ]);
        return view('all-planets', ['planets'=> $plan_data]);
    }

}
