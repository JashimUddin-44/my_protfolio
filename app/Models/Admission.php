<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function student_class()
    {
        return $this->belongsTo(Clist::class,'clist_id','id');
    }

    public function student_department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
