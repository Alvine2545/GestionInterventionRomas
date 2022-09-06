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
        'details', 'lieu', 'code', 'plannings_id', 'rapports_id','type_id', 'user_id',
    ];


    public function planning()
    {
        return $this->belongsTo(Planning::class, 'plannings_id');
    }

    public function user()
    {
        return $this->belongsTo(Planning_User::class, 'user_id');
    }

    public function typeintervention()
    {
        return $this->belongsTo(TypeIntervention::class, 'type_id');
    }
    public function facture()
    {
        return $this->hasMany(Facture::class, 'rapports_id');
    }


}
