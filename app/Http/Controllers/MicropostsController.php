<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;
use App\Micropost;

class MicropostsController extends Controller
{

     public function store(Request $request)
    {
    
        $request->validate([
            'name'=> 'required|max:255',
            'content' => 'required|max:255',
        ]);

        $micropost = new Micropost;
        $micropost->create([
        'name' => $request->name,
        'content' => $request->content,

        ]);

        return back();
    }
}
