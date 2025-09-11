<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $students = [
            ['id' => 1, 'name' => 'Budi Pekerti', 'email' => 'budianakbaik@gmail.com', 'address' => 'Jl. merdeka no 123'],
            ['id' => 2, 'name' => 'Ali Pertigaan', 'email' => 'delealli@gmail.com', 'address' => 'Jl. pahlawan no 456'],
            ['id' => 3, 'name' => '	Ahmad Sahroni', 'email' => 'ahmads@gmail.com', 'address' => 'Jl. kartini no 789'],
            ['id' => 4, 'name' => 'Mie Ayam', 'email' => 'mieayamenak@gmail.com', 'address' => 'Jl. enak no 012'],
            ['id' => 5, 'name' => 'Blender', 'email' => 'blender321@gmail.com', 'address' => 'Jl. dapur no 345']
        ];

        return view('student', [
            'title' => 'Student',
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
