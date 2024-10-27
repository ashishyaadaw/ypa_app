<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Control extends Model
{
    use HasFactory;

    protected $table = 'controls';

    protected $fillable = [

        'category',
        'description',
        'file_path',
        'link',
        'other',
        'status',
    ];

}
