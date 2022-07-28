<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produitinstalle;
use App\Models\Planning;
use App\Models\User;

class Panne extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'traite', 'nom', 'produitinstalles_id', 'user_id' ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
