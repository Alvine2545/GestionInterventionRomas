<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Devis;

class TypeDevis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }


}
