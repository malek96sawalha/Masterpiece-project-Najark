<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $fillable = ['image','name', 'email' , 'phone' , 'password' , 'created_at' , 'updated_at'];
}
