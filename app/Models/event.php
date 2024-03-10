<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;


    public function lieu()
    {
        return $this->belongsTo(lieu::class, 'lieu_id');
    }

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
