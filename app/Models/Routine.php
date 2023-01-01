<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Subject;
class Routine extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function teachers_name(){
        return $this->belongsTo(Teacher::class,'teacher_id','id');
    }

    public function student_subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
}
