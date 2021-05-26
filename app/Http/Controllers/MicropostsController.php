<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;
use App\Micropost;

class MicropostsController extends Controller
{

     public function store(Request $request)
    {
            
        $id = $request->get('airline_id');
        $model = \App\Airline::find($id);
        
        $request->validate([
        'name'=> 'required|max:255',
        'content' => 'required|max:255',
        ]);

        $model->microposts()->create([
        'name' => $request->name,
        'content' => $request->content,

        ]);

        return back();
    }
}
