<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';
    
    protected $fillable = [
        'ApellidoPaterno', 'ApellidoMaterno', 'Nombre', 'nombreUsuario', 'contraseña',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
