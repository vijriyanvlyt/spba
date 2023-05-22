<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.perusahaans.index',[
            'perusahaans' => Perusahaan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.perusahaans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

        Perusahaan::create($validatedData);

        session()->flash('status', 'Data Berhasil Ditambahkan!');

        return redirect('/dashboard/perusahaans');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perusahaan $perusahaan)
    {
        return view('dashboard.perusahaans.show',[
            'perusahaan' => $perusahaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perusahaan $perusahaan)
    {
        return view('dashboard.perusahaans.edit', [
            'perusahaan' => $perusahaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

        Perusahaan::where('id', $perusahaan->id)
            ->update($validatedData);

        session()->flash('status', 'Data Berhasil Diperbaharui!');

        return redirect('/dashboard/perusahaans');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perusahaan $perusahaan)
    {
        Perusahaan::destroy($perusahaan->id);

        session()->flash('status', 'Data Berhasil Dihapus!');

        return redirect('/dashboard/perusahaans');
    }
}
