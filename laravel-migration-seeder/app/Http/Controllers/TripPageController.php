<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripPageController extends Controller
{
    //
    public function product($id){

        $allTrips = Trip::all();
        $id = 'id';
        
        return view('trippage', compact('allTrips'));
    }
}
