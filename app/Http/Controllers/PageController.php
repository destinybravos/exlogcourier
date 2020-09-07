<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function tracking()
    {
        return view('tracking');
    }

    public function trackinginput()
    {
        return view('trackinginput');
    }
}
