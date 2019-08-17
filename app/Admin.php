<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $guard= 'admin';
    protected $table='admin';
    protected $fillable=[
        'name',
        'email',
        'log',
        'password',
    ];
    protected $hidden=[
        'email_verified_at',
        'password',
    ];
}
