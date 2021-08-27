<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    // Un admin a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
    // // Un administrateur appartient à un etablissement
    public function Etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }
}
