<?php

namespace App\Models;

use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parent extends Model
{
    use HasFactory;
    // Un parent a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
}
