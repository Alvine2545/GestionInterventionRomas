<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Installation;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'photo' ,'type'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'produitinstalles')->withPivot('version');
    }

}
