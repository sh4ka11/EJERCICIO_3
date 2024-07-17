<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{

    public function equipo ()
    {
        return $this->hasOne(Equipo::class);
    }

    use HasFactory;
}
