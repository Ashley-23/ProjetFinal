<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Moyenne;
use App\Models\Bulletin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatiereMoyene extends Model
{
    use HasFactory;

    // // Une MatiereMoyenne appartient à une matiere
    public function Matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    // // Une MatiereMoyenne appartient à une moyenne
    public function Moyenne()
    {
        return $this->belongsTo(Moyenne::class);
    }


    // Une MatiereMoyenne a un plusieurs bulletins

    public function Bulletins()
    {
        return $this->hasMany(Bulletin::class);
    }
}
