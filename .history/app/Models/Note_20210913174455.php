<?php

namespace App\Models;

use App\Models\EpreuveMatiereNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    protected $primaryKey = "idNote";
    protected $fillable = [
        'note1',
        'note2',
        'note3',
    ];

    // Une Note a un plusieurs EpreuveMatiereNote

    public function EpreuveMatiereNotes()
    {
        return $this->hasMany(EpreuveMatiereNote::class);
    }
    public function elev
}
