<?php

namespace App\Models;

use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuperAdmin extends Model
{
    use HasFactory;
    // Un superadmin a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
    // // Un profil appartient à un etablissement
    public function Etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }
}
