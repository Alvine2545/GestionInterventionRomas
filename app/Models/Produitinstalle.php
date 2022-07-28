<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Panne;

class Produitinstalle extends Model
{
    protected $fillable = ['version', 'produits_id', 'installations_id', ];
    use HasFactory;

    public function pannes()
    {
        return $this->hasMany(Panne::class);
    }


}
