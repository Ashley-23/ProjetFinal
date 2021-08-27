<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Relative;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RelationEleve extends Model
{
    use HasFactory;

    // // Une relation eleve appartient à un eleve
    public function Eleve()
    {
        return $this->belongsTo(Eleve::class);
    }


    // // Une relation eleve appartient à un relative
    public function Relative()
    {
        return $this->belongsTo(Relative::class);
    }
}
