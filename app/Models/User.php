<?php

namespace App\Models;

//use App\Notifications\Panneadmin;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Devis;
use App\Models\Panne;
use App\Models\Installation;
use App\Models\Roles;
use App\Models\Planning;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /*$data['demande']= true;
    $user->notify(new Panneadmin($data));
    //Voir les notifications
    $user->notifications;
    //Recevoir les notifications non lues
    $user->unreadNotifications;
    //Mettre à jour le statut Notification non lue
    $user->notifications->where('id', $id)->markAsUnread();
    //Mettre à jour le statut toutes les notifications non lues
    $user->notifications->markAsUnread();*/

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tel',
        'siege',
        'raisonSocial',
        'poste',
        'nom',
        'prenom',
        'ifu',
        'disponibilite',
        'status',
        'demande',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class,'roles_users', 'users_id','roles_id');
    }

    public function installations()
    {
        return $this->hasMany(Installation::class);
    }

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }

    public function pannes()
    {
        return $this->hasMany(Panne::class);
    }

    public function plannings()
    {
        return $this->belongsToMany(Planning::class, 'equipes', 'users_id','plannings_id');
    }

}
