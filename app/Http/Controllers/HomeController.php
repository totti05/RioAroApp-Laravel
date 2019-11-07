<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('landingPage.home');
    }

    public function Contact(){
        return view('landingPage.contact');
    }
    public function About(){
        return view('landingPage.aboutus');
    }
}
