<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Panne;
use App\Models\Intervention;
use App\Models\Equipe;


class Planning extends Model
{
    use HasFactory;
    protected $fillable = [
        'priorite', 'title', 'start', 'end','photo' ,'date', 'responsables_id', 'pannes_id'
    ];

    public function pannes()
    {
        return $this->belongsToMany(Panne::class,'pannes_plannings')->withPivot('estTraiter');
    }

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    // public function user()
    // {
    //     return $this->belongsToMany(User::class);

    // }

    public function users()
    {
        return $this->belongsToMany(User::class);
      // return $this->belongsToMany(User::class)->using(Equipe::class);
    }


}
