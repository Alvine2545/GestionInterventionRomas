<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Installation;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'photo' ,'type'];

    public function installations()
    {
        return $this->belongsToMany(Installation::class, 'produitinstalles')->withPivot('version');
    }

}
