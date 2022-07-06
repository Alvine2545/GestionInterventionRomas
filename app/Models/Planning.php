<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;

    public function panne()
    {
        return $this->belongsTo(Panne::class);
    }

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    public function type_intervention()
    {
        return $this->belongsTo(TypeIntervention::class);
    }
    
    public function respnsable()
    {
        return $this->belongsTo(Responsable::class);

    }

    public function techniciens()
    {
        return $this->belongsToMany(Technicien::class, 'equipes');
    }


}
