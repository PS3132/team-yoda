<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SWAPI\SWAPI;

class SwapiController extends Controller
{


    function view(){

            $swapi = new SWAPI();

            dd($swapi->planets()->index());

            // $swapi->characters()->index()  => Character[]
            // $swapi->characters()->index(2); => Character[]
            
            // $swapi->vehicles()->get(1);     => Vehicle <X-wing>
            // $swapi->planets()->get(7);      => Planet <Mustafar>
            
            // $swapi->people()->get(9999);    => null (not-found)
            
            // // Iteration
            // do {
            //     if (!isset($starships)) {
            //         $starships = $swapi->starships()->index();
            //     } else {
            //         $starships = $starships->getNext();
            //     }
            
            //     foreach ($starships as $s) {
            //         echo "{$s->name}\n";
            //     }
            // } while ($starships->hasNext());
        }
    
}
