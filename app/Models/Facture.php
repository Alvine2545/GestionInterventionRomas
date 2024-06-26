<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TypeDevis;
use App\Models\Panne;
use App\Models\Paiement;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix', 'payer', 'user_id', 'type', 'interventions_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function type_devis()
    // {
    //     return $this->belongsTo(TypeDevis::class);
    // }

    public function paiements()
    {
        return $this->belongsTo(Paiement::class);
    }

    public function intervention()
    {
        return $this->belongsTo(Intervention::class);
    }

}
