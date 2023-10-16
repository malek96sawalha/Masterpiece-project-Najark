<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['quantity','customerId' ,'productId'];

    public function product()
    {
        return $this->belongsTo(product::class, 'productId');
    }
}
