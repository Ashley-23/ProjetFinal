<?php

namespace App\Models;

use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professeur extends Model
{
    use HasFactory;
    // Un professeur a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
}
