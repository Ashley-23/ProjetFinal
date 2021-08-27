<?php

namespace App\Models;

use App\Models\AnneeScolaire;
use App\Models\Etablissement;
use App\Models\FraisScolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscription extends Model
{
    use HasFactory;


    // // Une inscription appartient à une annee scolaire
    public function AnneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class);
    }

    // // Une inscription appartient à un etablissement
    public function Etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

    // Une inscription a plusieurs frais scolaire

    public function FraisScolaires()
    {
        return $this->hasMany(FraisScolaire::class);
    }
}
