<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //On précise qu'il n'y aura pas de timestamp, ni d'id en aut-incrémentation
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'title', 'start', 'end',];
}
