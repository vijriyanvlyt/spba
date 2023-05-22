<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'beritaAcaras' => BeritaAcara::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
