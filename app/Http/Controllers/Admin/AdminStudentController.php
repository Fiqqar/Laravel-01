<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $classroom = Classroom::all();

        return view('admin.students', [
            'title' => 'Students',
            'students' => $students,
            'classroom' => $classroom
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'email' => 'required|email|max:255',
            'birthdate' => 'required|date',
            'address' => 'required|string|max:500',
            'classroom_id' => 'required|exists:classrooms,id'
        ]);

        Student::create($validated);
        return redirect('/dashboard/student')->with('success', 'Student berhasil ditambahkan!');
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'email' => 'required|email|max:255',
            'birthdate' => 'required|date',
            'address' => 'required|string|max:500',
            'classroom_id' => 'required|exists:classrooms,id'
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);
        return redirect('/dashboard/student')->with('success', 'Student berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/dashboard/student')->with('success', 'Student berhasil dihapus!');
    }
}
