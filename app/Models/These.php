<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class These extends Model
{
    use HasFactory;

    public function encadrants()
    {
        return $this->belongsToMany(Chercheur::class, 'these_chercheurs');
    }

    public function auteur()
    {
        return $this->belongsTo(Thesard::class);
    }
}
