<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use App\Models\Divisi;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KonsultanBeritaAcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.beritaAcaras.index',[
            'beritaAcaras' => BeritaAcara::where('divisi_id', auth()->user()->divisi_id)->orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.beritaAcaras.create', [
            'divisis' => Divisi::where('id', auth()->user()->divisi_id)->get(),
            'perusahaans' => Perusahaan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_kesepakatan' => 'required',
            'nomor_surat' => 'required',
            'divisi_id' => 'required',
            'perusahaan_id' => 'required',
            'hasil' => 'required'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        BeritaAcara::create($validatedData);

        session()->flash('status', 'Data Berhasil Ditambahkan!');

        return redirect('/dashboard/beritaAcaras');
    }

    /**
     * Display the specified resource.
     */
    public function show(BeritaAcara $beritaAcara)
    {
        return view('dashboard.beritaAcaras.show',[
            'beritaAcara' => $beritaAcara
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BeritaAcara $beritaAcara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BeritaAcara $beritaAcara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BeritaAcara $beritaAcara)
    {
        BeritaAcara::destroy($beritaAcara->id);

        session()->flash('status', 'Data Berhasil Dihapus!');

        return redirect('/dashboard/beritaAcaras');
    }
}
