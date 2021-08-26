<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;
    // Un profil appartient à un admin 
    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
    // // Un profil appartient à un superadmin 
    // public function SuperAdmin()
    // {
    //     return $this->belongsTo(SuperAdmin::class);
    // }
    // // Un profil appartient à un parent 
    // public function Parent()
    // {
    //     return $this->belongsTo(Parent::class);
    // }
    // // Un profil appartient à un professeur 
    // public function Professeur()
    // {
    //     return $this->belongsTo(Professeur::class);
    // }
    // // Un profil appartient à un etablissement 
    // public function Etablissement()
    // {
    //     return $this->belongsTo(Etablissement::class);
    // }
}
