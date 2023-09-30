<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){
        $this->belongsTo(User::class, 'userId');
    }
    use HasFactory;
}
