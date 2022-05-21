<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iabee extends Model
{
    use HasFactory;

    protected $table = 'iabee';
    protected $fillable = [
        'konten',
    ];
}
