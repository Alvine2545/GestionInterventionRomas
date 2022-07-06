<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function plannings()
    {
        return $this->belongsTo(Planning::class);
    }

    public function produitinstalle()
    {
        return $this->belongsTo(Produitinstalle::class);
    }

}
