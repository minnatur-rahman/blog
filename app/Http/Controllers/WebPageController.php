<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function index()
    {
        // MY QUERY AND ALL DATA
        $name = "ABID HASAN";
        return view('index', compact('name'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shajid()
    {
        return view('shajid');
    }

}
