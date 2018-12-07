<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Classes;
use App\Model\Faculties;
use App\Model\Subject;
use App\Model\Questions;

class Feedback extends Model
{
    protected $fillable = [
    	'faculty_id', 'class_id', 'subject_id', 'question_id',
    ];

    public function class(){
    	return $this->belongsTo(Classes::class);
    }

    public function faculty(){
    	return $this->belongsTo(Faculties::class);
    }
    
    public function subject(){
    	return $this->belongsTo(Subject::class);
    }

    public function question(){
    	return $this->belongsTo(Questions::class);
    }
}
