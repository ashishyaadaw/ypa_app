<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'dob',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'emergency_contact_name',
        'emergency_contact_phone',
        'volunteer_role',
        'availability',
        'skills',
        'reason',
        'file_path',
        'status',
    ];

}
