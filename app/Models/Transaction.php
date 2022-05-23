<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'person',
        'type',
        'amount',
        'balance',
        'date',
    ];

    public function type()
    {
        return $this->belongsTo(TransactionType::class, 'type', 'id');
    }
}
