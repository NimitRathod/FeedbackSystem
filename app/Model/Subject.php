<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Feedback;

class Subject extends Model
{
    protected $fillable = [
        'subject_name',
    ];

    public $timestamps = false;

    public function feedbacks(){
    	return $this->hasMany(Feedback::class);
    }
}
