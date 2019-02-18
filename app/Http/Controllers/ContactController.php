<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contact;

class ContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::find('1');
        return view('admin.contact.edit', compact('contact'));
    }
    public function change(Request $request)
    {


        // $request->validate([
        //     'email' => 'required|email|max:255',
        //     'number' => 'required|google_map_lag|max:255',
        //     'address' => 'required|max:255',
        //     'facebook' => 'required|max:255',
        //     'instagram' => 'required|max:255',
        //     'twetter' => 'required|max:255',
        //     'google_api_key' => 'required',
        //     'google_map_lat' => 'required',
        //     'google_map_lag' => 'required',
            
        // ]);

        $contact = Contact::find('1');
        $contact->email = request('email');
        $contact->number = request('number');
        $contact->address = request('address');
        $contact->facebook = request('facebook');
        $contact->instagram = request('instagram');
        $contact->twetter = request('twetter');
        $contact->google_map_frame = request('google_map_frame');
        $contact->save();
        return back();

    }
}
