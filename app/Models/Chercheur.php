<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chercheur extends Model
{
    use HasFactory;
    
    public function theses()
    {
        return $this->belongsToMany(These::class, 'these_chercheurs');
    }
}
