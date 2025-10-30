<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classroom = Classroom::all();
        return view('admin.classrooms', [
            'title' => 'Classroom',
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
            'name' => 'required|string|max:255'
        ]);

        Classroom::create([
            'name' => $validated['name']
        ]);

        return redirect('/dashboard/classroom')->with('success', 'Classroom berhasil ditambahkan!');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $classroom = Classroom::findOrFail($id);
        $classroom->update([
            'name' => $validated['name']
        ]);

        return redirect('/dashboard/classroom')->with('success', 'Classroom berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classroom = Classroom::findOrFail($id);

        $classroom->delete();

        return redirect('/dashboard/classroom')->with('success', 'Classroom berhasil dihapus!');
    }
}
