<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulums extends Model
{
    use HasFactory;

    protected $table = 'kurikulum';
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'kelompok_mk',
        'sks',
        'semester',
        'document'
    ];
}
