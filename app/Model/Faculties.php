<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    protected $fillable = [
        'faculty_fn','faculty_ln','email','post','phone',
    ];
}
