<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

}
