<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnus extends Model
{
    use HasFactory;

    protected $table = 'alumnus';
    protected $fillable = [
        'nama',
        'profesi',
        'photo'
    ];
}
