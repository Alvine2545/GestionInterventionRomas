<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Intervention;

class TypeIntervention extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nom'];

    // public function interventions()
    // {
    //     return $this->hasMany(Intervention::class);
    // }
}
