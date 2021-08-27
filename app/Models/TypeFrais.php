<?php

namespace App\Models;


use App\Models\FraisScolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeFrais extends Model
{
    use HasFactory;

    // Un type frais a un plusieurs frais scolaire

    public function FraisScolaires()
    {
        return $this->hasMany(FraisScolaire::class);
    }
}
