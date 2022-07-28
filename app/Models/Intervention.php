<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Planning;
use App\Models\TypeIntervention;

class Intervention extends Model
{
    use HasFactory;
    protected $fillable = [
        'details', 'lieu', 'code', 'plannings_id', 'rapports_id', 'user_id',
    ];


    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }

    public function rapport()
    {
        return $this->belongsTo(Rapport::class);
    }

    public function typeintervention()
    {
        return $this->belongsTo(TypeIntervention::class);
    }


}
