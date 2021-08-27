<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Epreuve;
use App\Models\Matiere;
use App\Models\Enseignement;
use App\Models\InfoEleveEnseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EpreuveMatiereNote extends Model
{
    use HasFactory;

    // // Une EpreuveMatiereNote appartient à une Epreuve
    public function Epreuve()
    {
        return $this->belongsTo(Epreuve::class);
    }

    // // Une EpreuveMatiereNote appartient à une matiere
    public function Matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    // // Une EpreuveMatiereNote appartient à une note
    public function Note()
    {
        return $this->belongsTo(Note::class);
    }

    // Une EpreuveMatiereNote a plusieurs InfoEleveEnseigner 

    public function InfoEleveEnseignements()
    {
        return $this->hasMany(InfoEleveEnseignement::class);
    }


    // Une EpreuveMatiereNote a plusieurs Enseignement

    public function Enseignements()
    {
        return $this->hasMany(Enseignement::class);
    }
}
