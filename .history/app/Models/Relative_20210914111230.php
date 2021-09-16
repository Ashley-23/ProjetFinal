<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\FraisScolaire;
use App\Models\RelationEleve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relative extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [
        'nomRelative',
        'prenomRelative',
        'login',
        'dateNaissRelative',
        'sexeRelative',
        'emailRelative',
        'passwordRelative',
        'adresseRelative',
        'telephoneRelative',
        'photoRelative',
    ];

    // Un parent a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
    // Un parent a un plusieurs RelationEleve 
    public function RelationEleve()
    {
        return $this->hasMany(RelationEleves::class);
    }
    // Un parent a un plusieurs FraisScolaire 
    public function FraisScolaire()
    {
        return $this->hasMany(FraisScolaires::class);
    }
}
