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
        $data = [
            'name' => 'Zulfiqar Silmy Setiawan',
            'class' => 'XI PPLG 2',
            'major' => 'PPLG'
        ];
        return view('profile', $data);
    }

    public function contact()
    {
        return view('contact');
    }

}
