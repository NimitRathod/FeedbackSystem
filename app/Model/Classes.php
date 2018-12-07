<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
    	return $this->hasMany(Classes::class);
    }

}
