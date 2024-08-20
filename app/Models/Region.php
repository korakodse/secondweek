<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    // 1 to m
    public function country(){
        // เป็นส่วนกลับ    
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function province(){
        return $this->hasMany(province::class,'region_id','id');
    }

}
