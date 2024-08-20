<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function province(){
        // เป็นส่วนกลับ    
        return $this->belongsTo(province::class,'province_id','id');
    }
}
