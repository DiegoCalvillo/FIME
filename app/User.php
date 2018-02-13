<?php

namespace FIME;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'puesto_id', 'estatus_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function puesto()
    {
        return $this->belongsTo(puesto::class);
    }

    public function estatus()
    {
        return $this->belongsTo(Estatus::class, 'estatus_id');
    }
}
