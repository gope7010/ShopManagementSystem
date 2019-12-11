<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Employee extends Authenticatable
{
     use Notifiable;

    protected $fillable = ['firstname','lastname', 'description', 'phone'];
}
