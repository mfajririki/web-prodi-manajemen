<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangMinat extends Model
{
    use HasFactory;

    protected $table = 'mk_bidangminat';
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'bidangminat',
        'kelompok_mk',
        'semester',
        'sks',
        'stream',
    ];
}
