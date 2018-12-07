<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Classes;
use App\Model\Questions;

class Feedback extends Model
{
    protected $fillable = [
    	'faculty_id', 'class_id', 'subject_id', 'question_id',
    ];

    public function classes(){
    	return $this->belongsTo(Classes::class);
    }

    public function questions(){
    	return $this->belongsTo(Questions::class);
    }
}
