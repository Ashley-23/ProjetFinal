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
        'idMatiere',
    ];

    protected $table = "classe_matieres";

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}
