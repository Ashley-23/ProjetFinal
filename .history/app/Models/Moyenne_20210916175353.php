<?php

namespace App\Models;

use App\Models\Note;
use App\Models\MatiereMoyene;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moyenne extends Model
{
    use HasFactory;
    protected $primaryKey = "idMoyenne";
    protected $fillable = [
        'valeurMoyenne',
        'rangMoyenne',
        'idNote'
    ];
    // Une moyenne a un plusieurs MatiereMoyenne
    // Une n appartient à un admin 
    public function Note()
    {
        return $this->belongsTo(Note::class);
    }
    public function MatiereMoyennes()
    {
        return $this->hasMany(MatiereMoyene::class);
    }
}
