<?php

namespace App\Models;

use App\Models\MatiereMoyene;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moyenne extends Model
{
    use HasFactory;
    protected $primaryKey = "idMoyenne";
    protected $fillable = [
        'valeurMoyenne',
        'note2',
        'note3',
        'idEleve',
        'id',
    ];
    // Une moyenne a un plusieurs MatiereMoyenne

    public function MatiereMoyennes()
    {
        return $this->hasMany(MatiereMoyene::class);
    }
}