<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Airline;

class AirlinesController extends Controller
{

   public function index()
    {
        $airlines = Airline::all();
     
        return view('welcome', [
            'airlines' => $airlines,
        ]);
    }
}
