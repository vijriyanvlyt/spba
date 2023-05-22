<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'no_telp',
    ];

    public function beritaAcara(){
        return $this->hasMany(BeritaAcara::class);
    }
}
