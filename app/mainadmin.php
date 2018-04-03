<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class mainadmin extends Authenticatable
{
    use Notifiable;


    protected $guard = 'mainad';

    protected $fillable = [
        'firstname' , 'lastname' , 'phone','email', 'avatar'
    ];
    protected $hidden = [
        'password', 'pin', 'remember_token',
    ];
}
