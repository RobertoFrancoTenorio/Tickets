<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = 'ticket';
    
    protected $fillable = [
        'idCliente', 'descripción', 'producto',
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
