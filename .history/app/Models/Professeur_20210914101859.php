<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\Enseignement;
use App\Models\ClasseMatiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professeur extends Model
{
    use HasFactory;

    protected $primaryKey = "idProfesseur";

    protected $fillable = [
        'nomProfesseur',
        'prenomProfesseur',
        'login',
        'dateNaissProfesseur',
        'sexeProfesseur',
        'emailProfesseur',
        'passwordProfesseur',
        'adresseProfesseur',
        'telephoneProfesseur',
        'photoProfesseur',
    ];


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
    public function classeMatieres()
    {
        return $this->hasMany(ClasseMatiere::class);
    }
}
