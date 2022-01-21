<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileKaprodi extends Model
{
    use HasFactory;

    protected $table = 'profile_kaprodi';
    protected $fillable = [
        'nama',
        'kutipan',
        'photo'
    ];
}
