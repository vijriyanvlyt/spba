<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use App\Models\Divisi;
use Illuminate\Http\Request;

class byDivisiController extends Controller
{
    public function index(){
        return view('dashboard.byDivisis.index',[
            "divisis" => Divisi::where('id', '!=', 1)->orWhereNull('id')->get()
        ]);
    }

    public function show($slug){
        return view('dashboard.byDivisis.show',[
            "divisi" => Divisi::find($slug),
            "beritaAcaras" => BeritaAcara::where('divisi_id', $slug)->orderBy('created_at', 'DESC')->get()
        ]);
    }
}
