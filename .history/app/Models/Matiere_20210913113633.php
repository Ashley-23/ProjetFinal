<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\MatiereMoyene;
use App\Models\EpreuveMatiereNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;
    protected $primaryKey = "idMatiere";
    protected $fillable = [
        'nomMatiere',
    ];


    // Une matiere a  plusieurs MatiereMoyenne

    public function MatiereMoyennes()
    {
        return $this->hasMany(MatiereMoyene::class);
    }

    // Une matiere a  plusieurs EpreuveMatiereNote 

    public function EpreuveMatiereNotes()
    {
        return $this->hasMany(EpreuveMatiereNote::class);
    }

    public function classes(): belo
    {
        // 
        return $this->belongsToMany(Classe::class, 'classe_matieres');
    }
}
