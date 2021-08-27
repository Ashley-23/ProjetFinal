<?php

namespace App\Models;

use App\Models\Professeur;
use App\Models\EpreuveMatiereNote;
use App\Models\InfoEleveEnseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignement extends Model
{
    use HasFactory;

    // // Un enseignement appartient à un professeur
    public function Professeur()
    {
        return $this->belongsTo(Professeur::class);
    }


    // // Un enseignement appartient à une EpreuveMatiereNote
    public function EpreuveMatiereNote()
    {
        return $this->belongsTo(EpreuveMatiereNote::class);
    }

    // Un enseignement a plusieurs InfoEleveEnseignement 

    public function InfoEleveEnseignements()
    {
        return $this->hasMany(InfoEleveEnseignement::class);
    }
}
