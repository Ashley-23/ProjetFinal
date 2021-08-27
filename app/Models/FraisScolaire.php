<?php

namespace App\Models;

use App\Models\Relative;
use App\Models\TypeFrais;
use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FraisScolaire extends Model
{
    use HasFactory;

    // // Un frais scolaire appartient à un type frais
    public function TypeFrais()
    {
        return $this->belongsTo(TypeFrais::class);
    }

    // // Un frais scolaire appartient à une inscription
    public function Inscription()
    {
        return $this->belongsTo(Inscription::class);
    }
    // // Un frais scolaire appartient à un ou relative
    public function Relative()
    {
        return $this->belongsTo(Relative::class);
    }
}
