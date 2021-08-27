<?php

namespace App\Models;

use App\Models\TypeFrais;
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
}
