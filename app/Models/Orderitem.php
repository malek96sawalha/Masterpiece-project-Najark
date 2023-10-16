<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    protected $fillable = [
        'customerId',
        'orderId',
        'productId',
        'quantity',
        'price',

    ];
    public function orderDetail()
    {
        return $this->belongsTo(Orderdetail::class,"orderId");
    }
    public function product()
    {
        return $this->belongsTo(Product::class,"productId");
    }
    use HasFactory;
}
