<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Panne;

class Produitinstalle extends Model
{
    use HasFactory;

    public function pannes()
    {
        return $this->hasMany(Panne::class);
    }
  
    
}
