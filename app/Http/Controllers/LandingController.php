<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function Index()
    {
        return view('landingPage.home');
    }
    public function About()
    {
        return view('landingPage.aboutus');
    }
    public function contact()
    {
        return view('landingPage.contact');
    }
}
