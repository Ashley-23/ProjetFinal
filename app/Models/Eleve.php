<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\Bulletin;
use App\Models\RelationEleve;
use App\Models\InfoEleveEnseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleve extends Model
{
    use HasFactory;
    // Un eleve a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }

    // Un eleve a plusieurs InfoEleveEnseignement

    public function InfoEleveEnseignements()
    {
        return $this->hasMany(InfoEleveEnseignement::class);
    }


    // Un eleve a un bulletin 

    public function Bulletin()
    {
        return $this->hasOne(Bulletin::class);
    }
    // Un eleve a plusieurs RelationEleve 

    public function RelationEleves()
    {
        return $this->hasMany(RelationEleve::class);
    }
}
