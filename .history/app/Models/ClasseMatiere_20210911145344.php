<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseMatiere extends Model
{
    use HasFactory;
    protected $primaryKey = "idClasse";

    protected $fillable = [
        'nomClasse',
        'typeClasse',
    ];

    protected $table = "classe_matieres";
}
