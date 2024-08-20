<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    // 1 to m
    public function region(){
        return $this->hasMany(region::class,'country_id','id');
    }
}
