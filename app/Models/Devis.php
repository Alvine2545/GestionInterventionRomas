<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\TypeDevis;
use App\Models\Panne;
use App\Models\Paiement;

class Devis extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix', 'payer',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function type_devis()
    {
        return $this->belongsTo(TypeDevis::class);
    }

    public function paiements()
    {
        return $this->belongsTo(Paiement::class);
    }

    public function panne()
    {
        return $this->belongsTo(Panne::class);
    }

}
