<?php

namespace App\Models;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $primaryKey = "idClasse";

    protected $fillable = [
        'nomClasse',
        'typeClasse',
    ];

    // Un eleve a plusieurs eleves

    public function Eleves()
    {
        return $this->hasMany(Eleve::class);
    }

    public function matiere()
    {
        // 
return $this
    }

    // 
}
