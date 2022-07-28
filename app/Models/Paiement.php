<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Devis;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'reste', 'montantpayer', 'devis_id',
    ];

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }

}
