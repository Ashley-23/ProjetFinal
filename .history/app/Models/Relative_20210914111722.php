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

    protected $primaryKey = "idRelative";

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
    public function profil()
    {
        return $this->hasOne(Profil::class);
    }
    // Un parent a un plusieurs RelationEleve 
    public function relationEleves()
    {
        return $this->hasMany(RelationEleves::class);
    }
    // Un parent a un plusieurs FraisScolaire 
    public function fraisScolaires()
    {
        return $this->hasMany(FraisScolaires::class);
    }
}
