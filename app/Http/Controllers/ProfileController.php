<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function contact()
    {
        return view('contact');
    }
}
