<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'department_id','program_name',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
