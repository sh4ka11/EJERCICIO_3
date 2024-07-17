<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    public function jugador ()
    {
        return $this->belongsTo(jugador::class);
    }

    public function partidos ()
    {
        return $this->belongsToMany(Partido::class);
    }

    public function presidente ()
    {
        return $this->hasOne(Presidente::class);
    }


    use HasFactory;
}
