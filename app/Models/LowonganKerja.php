<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganKerja extends Model
{
    use HasFactory;

    protected $table = 'lowongan_kerja';
    protected $fillable = [
        'nama_loker',
        'nama_instansi',
        'lokasi',
        'link',
        'deadline'
    ];
}
