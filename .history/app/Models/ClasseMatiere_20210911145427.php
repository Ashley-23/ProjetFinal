<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseMatiere extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    protected $fillable = [
        'idClasse',
        'typeClasse',
    ];

    protected $table = "classe_matieres";
}
