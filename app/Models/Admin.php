<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    // Un admin a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
}
