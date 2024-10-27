<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetPlayArtist extends Model
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
        'preferred_role',
        'experience_level',
        'skills',
        'previous_performances',
        'motivation',
        'file_path',
        'status',
    ];
}
