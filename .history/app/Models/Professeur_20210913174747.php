<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\Enseignement;
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
    // Un professeur a un plusieurs Enseignement

    public function Enseignements()
    {
        return $this->hasMany(Enseignement::class);
    }
    public function classeMa()
    {
        return $this->hasMany(Enseignement::class);
    }
}
