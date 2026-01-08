<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    public function index(Request $request)
    {
        $guardian = Guardian::when($request->search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('job', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%");
        })->latest()->paginate(10)->withQueryString();

        return view('admin.guardians', [
            'title' => 'Guardian',
            'guardian' => $guardian
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500'
        ]);

        Guardian::create($validated);

        return redirect('/dashboard/guardian')->with('success', 'Guardian berhasil ditambahkan');
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500'
        ]);

        Guardian::findOrFail($id)->update($validated);

        return redirect('/dashboard/guardian')->with('success', 'Guardian berhasil diupdate');
    }

    public function destroy(string $id)
    {
        Guardian::findOrFail($id)->delete();

        return redirect('/dashboard/guardian')->with('success', 'Guardian berhasil dihapus');
    }
}
