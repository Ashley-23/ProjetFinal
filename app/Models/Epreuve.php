<?php

namespace App\Models;

use App\Models\EpreuveMatiereNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Epreuve extends Model
{
    use HasFactory;
    // Un Epreuve a un plusieurs EpreuveMatiereNote

    public function EpreuveMatiereNotes()
    {
        return $this->hasMany(EpreuveMatiereNote::class);
    }
}
