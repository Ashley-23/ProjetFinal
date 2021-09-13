<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classe extends Model
{
    use HasFactory;

    protected $primaryKey = "idClasse";

    protected $fillable = [
        'nomClasse',
        'typeClasse',
    ];

    // Un eleve a plusieurs eleves

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }

    public function matieres(): BelongsToMany
    {
        // 
        return $this->belongsToMany(Matiere::class, 'classe_matieres');
    }

    // 
}
