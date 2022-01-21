<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileLulusan extends Model
{
    use HasFactory;

    protected $table = 'profile_lulusan';
    protected $fillable = [
        'no',
        'nama',
        'deskripsi'
    ];
}
