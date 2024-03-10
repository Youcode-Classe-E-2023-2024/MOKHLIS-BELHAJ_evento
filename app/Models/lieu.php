<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lieu extends Model
{
    use HasFactory;

    // Spécifiez le nom de la table
    protected $table = 'lieux';
    
    public function events()
    {
        return $this->hasMany(Event::class, 'lieu_id');
    }
}
