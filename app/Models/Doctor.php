<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    protected $fillable = [
        'email', 'name', 'password', 'address'
    ];
 
    protected $hidden = [
        'password'
    ];
}