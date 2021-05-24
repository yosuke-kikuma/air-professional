<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Airline;

class AirlinesController extends Controller
{
   public function index()
    {
        // メッセージ一覧を取得
        $airlines = Airline::all();
     
        return view('airline.index', [
            'airlines' => $airlines,
        ]);
    }
}
