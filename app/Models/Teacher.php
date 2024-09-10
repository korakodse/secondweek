<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    /*protected $fillable = [
        'id',
        'pre',
        'name',
        'lastname',
        'email',
        'province_id',
    ];*/

    protected $guarded = [];

    public function province(){
        // เป็นส่วนกลับ
        return $this->belongsTo(province::class,'province_id','id');
    }
}
