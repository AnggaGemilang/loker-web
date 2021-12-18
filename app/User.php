<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = 't_user';

    protected $fillable = [
        'nama','email','password','remember_token','role_id','created_at','update_at'
    ];    
}
