<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
    	'question',
    ];

    public $timestamps = false;
}
