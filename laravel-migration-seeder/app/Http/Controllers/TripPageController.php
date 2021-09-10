<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripPageController extends Controller
{
    //
    public function product($id){

        $trip = Trip::where('id', $id)->first(); 
        //prendo esattamente il record con l'id specifico 
        //e mi tira fuori direttamente l'oggetto in questione
        // senza bisogno di usare il foreach
        $id = 'id';
        
        return view('trippage', compact('trip'));
    }
}
