<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.divisis.index',[
            'divisis' => Divisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.divisis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Divisi::create($validatedData);

        session()->flash('status', 'Data Berhasil Ditambahkan!');

        return redirect('/dashboard/divisis');
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        return view('dashboard.divisis.show',[
            'divisi' => $divisi,
            'users' => User::where('divisi_id', $divisi->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        return view('dashboard.divisis.edit', [
            'divisi' => $divisi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Divisi::where('id', $divisi->id)
            ->update($validatedData);

        session()->flash('status', 'Data Berhasil Diperbaharui!');

        return redirect('/dashboard/divisis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        Divisi::destroy($divisi->id);

        session()->flash('status', 'Data Berhasil Dihapus!');

        return redirect('/dashboard/divisis');
    }
}
