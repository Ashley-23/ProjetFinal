<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Enseignement;
use App\Models\EpreuveMatiereNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfoEleveEnseignement extends Model
{
    use HasFactory;

    // // Un infoEleveEnseignement appartient à un EpreuveMatiereNote
    public function EpreuveMatiereNote()
    {
        return $this->belongsTo(EpreuveMatiereNote::class);
    }

    // // Un infoEleveEnseignement appartient à un enseignement
    public function Enseignement()
    {
        return $this->belongsTo(Enseignement::class);
    }

    // // Un infoEleveEnseignement appartient à un eleve
    public function Eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
}
