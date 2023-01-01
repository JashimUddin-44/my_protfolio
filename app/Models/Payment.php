<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Feetype;
use App\Models\Paymentmethod;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function students(){
        return $this->hasOne(Student::class,'id','student_id');
    }

    public function feeTypes(){
        return $this->belongsTo(Feetype::class,'feetype_id','id');
    }

    public function methods(){
        return $this->belongsTo(Paymentmethod::class,'paymentmethod_id','id');
    }
}
