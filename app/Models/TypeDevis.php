<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDevis extends Model
{
    use HasFactory;

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }


}
