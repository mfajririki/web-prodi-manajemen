<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingAkademik extends Model
{
    use HasFactory;

    protected $table = 'bimbingan_akademik';
    protected $fillable = [
        'title',
        'document',
    ];
}
