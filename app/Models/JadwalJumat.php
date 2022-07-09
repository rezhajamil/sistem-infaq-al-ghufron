<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalJumat extends Model
{
    use HasFactory;

    protected $fillable = [
        'imam',
        'khotib',
        'tanggal'
    ];
}
