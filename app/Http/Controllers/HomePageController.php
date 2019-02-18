<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Slider;
use \App\About;
use \App\Contact;

class HomePageController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        $about = About::find('1');
        $contact = Contact::find('1');


        return view('welcome', compact('sliders', 'about', 'contact'));
    }
}
