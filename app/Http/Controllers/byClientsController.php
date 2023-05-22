<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perusahaan;

class byClientsController extends Controller
{
    public function index(){
        return view('dashboard.byClients.index',[
            "perusahaans" => Perusahaan::all()
        ]);
    }

    public function show($slug){
        return view('dashboard.byClients.show',[
            "perusahaan" => Perusahaan::find($slug),
            "beritaAcaras" => BeritaAcara::where('perusahaan_id', $slug)->orderBy('created_at', 'DESC')->get()
        ]);
    }
}
