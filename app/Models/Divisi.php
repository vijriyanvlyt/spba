<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function beritaAcara(){
        return $this->hasMany(BeritaAcara::class);
    }

    //protected $guarded = ['id'];
}
