<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }

    public function rapport()
    {
        return $this->belongsTo(Rapport::class);
    }
     
    public function devis()
    {
        return $this->hasMany(Devis::class);
    }
 
}
