<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    //one to many
   /* public function student(){
        return $this->hasMany(student::class,'province_id','id');
    }*/

    /*public function teacher(){
        return $this->hasMany(teacher::class,'province_id','id');
    }*/

    public function region(){
        // เป็นส่วนกลับ    
        return $this->belongsTo(region::class,'region_id','id');
    }

    public function teacher(){
        return $this->hasMany(teacher::class,'province_id','id');
    }

    public function student(){
        return $this->hasMany(student::class,'province_id','id');
    }
}
