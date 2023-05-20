<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_kesepakatan',
        'nomor_surat',
        'divisi_id',
        'perusahaan_id',
        'hasil'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }
    
    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class);
    }
}
