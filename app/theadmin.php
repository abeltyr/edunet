<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class theadmin  extends Authenticatable
{
    use Notifiable;

    protected $guard = 'thead';


    protected $fillable = [
        'firstname', 'lastname', 'password', 'email', 'password',  'phone', 'pin',
    ];
    protected $hidden = [
       'remember_token',
    ];
}
