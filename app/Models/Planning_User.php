<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rapport;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Planning_User extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'plannings_id',
    ];


    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }
}
