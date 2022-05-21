<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prasarana extends Model
{
    use HasFactory;

    protected $table = 'prasarana';
    protected $fillable = [
        'nama_fasilitas',
        'deskripsi',
        'photo'
    ];
}
