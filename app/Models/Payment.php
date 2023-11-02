<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'userId',
        'amount',
        'status',
        'payment-method',
        

    ];
    use HasFactory;
}
