<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        $this->belongsTo(Category::class, 'categoryId');
    }
    use HasFactory;

    public function cart()
    {
        return $this->hasMany(cart::class);
    }
    public function orderItem()
    {
        return $this->hasMany(Orderitem::class);
    }
}
