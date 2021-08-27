<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnneeScolaire extends Model
{
    use HasFactory;
    // Une annee scolaire a un plusieurs Inscriptions

    public function Inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
