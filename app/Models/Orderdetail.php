<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{

    protected $fillable = [
        'orderDate', // Add 'userId' to the $fillable array
        'customerId',// Other fillable properties here...
        'totalPrice', // Add 'city' to the $fill
        'shipmentId',

    ];
    public function user()
    {
        return $this->belongsTo(User::class,"userId");
    }
    public function address()
    {
        return $this->belongsTo(Shipment::class,"shipmentId");
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class,"paymentId");
    }
    // public function orderItem()
    // {
    //     return $this->hasMany(Orderitem::class,'orderId');
    // }
//     public function orderItem()
// {
//     return $this->hasMany(Orderitem::class, 'orderId');
// }
public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'orderId');
    }
}
