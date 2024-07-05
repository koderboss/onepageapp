<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home(){
        $title = ['title' => "Home"];
        return view('home', $title);
    }

    function about()
    {
        $title = ['title' => "About"];
        return view('about', $title);
    }

    function service()
    {
        $title = ['title' => "Services"];
        return view('service', $title);
    }

    function contact()
    {
        $title = ['title' => "Contact"];
        return view('contact', $title);
    }
}
