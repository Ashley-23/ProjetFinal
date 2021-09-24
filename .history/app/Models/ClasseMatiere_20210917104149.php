<?php

namespace App\Models;

use App\Models\Professeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClasseMatiere extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    protected $fillable = [
        'idClasse',
        'idMatiere',
        'idProfesseur',
        'coef',
    ];

    protected $table = "classe_matieres";

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function matiere()
    {
        return $this->hasOne(Matiere::class);
    }
    public function classe()
    {
    return $this->belongsTo(Classe:class)}
}
