<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cancion;
class User extends Model
{
    use HasFactory;
    public function canciones()
    {
     return $this->hasMany(Cancion::class);   
    }
    
}
