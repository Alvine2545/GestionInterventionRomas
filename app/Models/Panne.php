<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produitinstalle;
use App\Models\Planning;
use App\Models\User;
use Illuminate\Notifications\Notifiable;

class Panne extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'description', 'photo', 'traite', 'nom', 'produitinstalles_id', 'user_id' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plannings()
    {
        return $this->belongsToMany(Planning::class, 'pannes_plannings')->withPivot('estTraiter');
    }

    public function produitinstalle()
    {
        return $this->belongsTo(Produitinstalle::class);
    }

}
