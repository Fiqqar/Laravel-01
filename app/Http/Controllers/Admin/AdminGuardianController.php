<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardian = Guardian::all();

        return view('admin.guardians', [
            'title' => 'Guardian',
            'guardian' => $guardian
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
            'job' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500'
        ]);

        Guardian::create($validated);

        return redirect('/dashboard/guardian')->with('success', 'Guardian berhasil ditambahkan!');
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
            'job' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:500'
        ]);

        $guardian = Guardian::findOrFail($id);
        $guardian->update($validated);

        return redirect('/dashboard/guardian')->with('success', 'Guardian berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guardian = Guardian::findOrFail($id);

        $guardian->delete();

        return redirect('/dashboard/guardian')->with('success', 'Guardian berhasil dihapus!');
    }
}
