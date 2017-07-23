<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('Welcome');
    }

    public function AboutUs()
    {
        return view('AboutUs');
    }

    public function ContactUs()
    {
        return view('ContactUs');
}

    public function Registration()
    {
        return view('Registration');
    }

    public function WorkSpaces()

    {
        return view('WorkSpaces');
    }

    public function Home2()

    {
        return view('Home2');
    }
}