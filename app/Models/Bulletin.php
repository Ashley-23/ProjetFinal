<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\MatiereMoyene;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bulletin extends Model
{
    use HasFactory;


    // // Un bulletin appartient à un eleve
    public function Eleve()
    {
        return $this->belongsTo(Eleve::class);
    }


    // // Un bulletin appartient à un matiere moyenne
    public function MatiereMoyene()
    {
        return $this->belongsTo(MatiereMoyene::class);
    }
}
