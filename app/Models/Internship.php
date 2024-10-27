<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
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
        'internship_role',
        'skills',
        'file_path_resume',
        'file_path',
        'status',
    ];

}
