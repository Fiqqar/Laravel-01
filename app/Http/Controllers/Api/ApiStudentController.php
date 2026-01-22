<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ApiStudentController extends Controller
{
    public function index() {
        return response()->json([
            'success' => true,
            'message' => Student::all()
        ]);
    }
    
    public function show($id) {
        $student = Student::find($id);
        if(!$student) {
            return response()->json([
                'success' => false,
                'message' => 'Student not found'
            ], 404);
        } else {
            return response()->json([
                'success' => true,
                'message' => $student
            ]);
        }
    }
}
