<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;  

class ContactsController extends Controller
{
 
    public function create()
    {
        $contact = new Contact;
        return view('company.contact', [
            'contact' => $contact,
        ]);
    }
       
    public function store(Request $request)
    {
            
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'number' => 'required|max:255',
            'content' => 'required|max:255',
        ]);
        
        $contact = new Contact;
        $contact->create([
            'name' => $request->content,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
        ]);
        
        return redirect('/');
    }
}
