<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jumlah',
        'payment_status',
        'midtrans_url',
        'midtrans_booking_code',
    ];
}
