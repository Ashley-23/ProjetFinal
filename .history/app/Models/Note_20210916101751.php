<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Professeur;
use App\Models\ClasseMatiere;
use App\Models\EpreuveMatiereNote;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    protected $primaryKey = "idNote";
    protected $fillable = [
        'note1',
        'note2',
        'note3',
        'idEleve'
'id'
    ];

    // Une Note a un plusieurs EpreuveMatiereNote

    public function EpreuveMatiereNotes()
    {
        return $this->hasMany(EpreuveMatiereNote::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
    public function classeMatiere()
    {
        return $this->belongsTo(ClasseMatiere::class);
    }
}
