<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Profil;
use App\Models\SuperAdmin;
use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etablissement extends Model
{
    use HasFactory;

    protected $primary = "idEtablissement";
    protected $fillable = [
        'nomEtablissement',
        'login',
        'adresseEtablissement',
        'emailEtablissement',
        'password',
        'telephoneEtablissement',
    ];
    // Un etablissement a un profil 
    public function Profil()
    {
        return $this->hasOne(Profil::class);
    }
    // Un Etablissement a un plusieurs administrateurs

    public function Administrateurs()
    {
        return $this->hasMany(Admin::class);
    }
    // Un etablissement a un superadmin
    public function SuperAdmin()
    {
        return $this->hasOne(SuperAdmin::class);
    }

    // Un Etablissement a plusieurs Inscriptions

    public function Inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
