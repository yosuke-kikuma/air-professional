<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;
use App\Micropost;

class MicropostsController extends Controller
{
      public function show($id)
    {
        $airline = Airline::findOrFail($id);
     
        $microposts = $airline->microposts()->orderBy('created_at', 'desc')->paginate(10);
       
        return view('airline.ana', [
            'airline' => $airline,
            'microposts' => $microposts,
        ]);
    }
    

     public function store(Request $request,$id)
    {
        $request->validate([
        'name'=> 'required|max:15',
        'content' => 'required|max:255',
        ]);
        
        $airline = Airline::findOrFail($id);

        $airline->microposts()->create([
        'name' => $request->name,
        'content' => $request->content,

        ]);

        return back();
    }
}
