<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function profile()
    {
        return view('profile', data: [
            'title' => 'Profile'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact'
        ]);
    }
    public function student()
    {
        return view('student', [
            'title' => 'Student'
        ]);
    }
}
