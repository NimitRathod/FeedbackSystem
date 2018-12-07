<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Feedback;

class Classes extends Model
{
    //
    protected $fillable = [
        'program_id','class_name','semester',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function feedbacks(){
    	return $this->hasMany(Feedback::class);
    }

}
