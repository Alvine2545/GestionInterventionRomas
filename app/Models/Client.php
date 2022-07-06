<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    use HasFactory;
    protected $table = 'client';

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    public function installations()
    {
        return $this->hasMany(Installation::class);
    }

    public function pannes()
    {
        return $this->hasMany(Panne::class);
    }
    
    public function devis()
    {
        return $this->hasMany(Devis::class);
    }


}
