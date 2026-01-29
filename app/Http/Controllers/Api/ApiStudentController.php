<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;

class ApiStudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();
        $clasrooms = Classroom::all();
        return response()->json([
            'success' => true,
            'students' => $students,
            'classrooms' => $clasrooms
        ]);
    }

    public function show($id)
    {
        $student = Student::with('classroom')->find($id);

        if (!$student) {
            return response()->json([
                'success' => false,
                'message' => 'Student not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $student
        ]);
    }
}
