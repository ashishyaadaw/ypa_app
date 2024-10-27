<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admins extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'role',
        'status',
    ];


}


