<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Feedback;

class Faculties extends Model
{
    protected $fillable = [
        'faculty_fn','faculty_ln','email','post','phone',
    ];

    public function feedbacks(){
    	return $this->hasMany(Feedback::class);
    }
}
