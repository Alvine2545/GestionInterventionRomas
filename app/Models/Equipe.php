<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rapport;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'plannings_id',
    ];


    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }
}
