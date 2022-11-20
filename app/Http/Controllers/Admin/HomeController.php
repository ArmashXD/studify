<?php

namespace App\Http\Controllers\Admin;

class HomeController
{

    public function landingPage() 
    {
        return view('home');
    }

    public function index()
    {
        return view('admin.home');
    }
}
