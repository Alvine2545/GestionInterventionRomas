<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

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

    public function intervention()
    {
        return $this->belongsTo(Intervention::class);
    }

}
