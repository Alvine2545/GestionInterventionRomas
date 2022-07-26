<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produitinstalle;
use App\Models\Planning;
use App\Models\Client;

class Panne extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'produit', 'nom',
    ];

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
