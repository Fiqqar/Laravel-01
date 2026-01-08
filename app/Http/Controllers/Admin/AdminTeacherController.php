<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teacher = Teacher::with('subject')
            ->when($request->search, function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('phone', 'like', '%' . $request->search . '%')
                    ->orWhereHas('subject', function ($s) use ($request) {
                        $s->where('name', 'like', '%' . $request->search . '%');
                    });
            })
            ->paginate(10)
            ->withQueryString();

        $subjects = Subject::all();

        return view('admin.teachers', [
            'title' => 'Teacher',
            'teacher' => $teacher,
            'subjects' => $subjects
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
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:500'
        ]);

        Teacher::create($validated);
        return redirect('/dashboard/teacher')->with('success', 'Teacher berhasil ditambahkan!');
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
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:500'
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validated);
        return redirect('/dashboard/teacher')->with('success', 'Teacher berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('/dashboard/teacher')->with('success', 'Teacher berhasil dihapus!');
    }
}
