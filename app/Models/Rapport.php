<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Intervention;
use App\Models\Equipe;

class Rapport extends Model
{
    use HasFactory;

    protected $fillable = [
        'paiement', 'reference', 'solution', 'appreciations', 'equipes_id' ];


    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

}
