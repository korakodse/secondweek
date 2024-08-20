<?php

use App\Models\Country;
use App\Models\Region;
use App\Models\Province;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});


Route::get('/home', function () {

return view('home');

});

Route::get('/profile', function () {

return view('korakod');

});
    // คำสั่ง debug
    // การ query
    //$model = \App\Models\Province::all();
    //dd($model);

    //-> where('lastname',"LIKE",'a%') หาคนชื่อขึ้นต้นด้วย a
    //-> where('id','>=','20') เอาค่ามากกว่า เท่ากับ 20 ตาราง เงื่อนไข
    //-> wherebetween('id',[20,50]) เอาค่าระหว่าง 20-50
    //-> wherenotbetween('id',[20,50]) ไม่เอาค่าระหว่าง 20-50 คือ 1-19 51-100
    //-> orwhere('province_id','3') orwhere ใช้เลือกหลายค่า ต่อจาก where ก่อนหน้า
    //-> wherein('province_id',['2','3']) ที่อยู่ใน 2 หรือ 3 ก้ได้ ระบุเป็น array
    //-> wherenotin('id',['10','20','30']) ข้อมูลยกเว้นที่ไม่แสดง
    //-> take(10) ดึงข้อมูลจำนวน 10 ชุด
    //-> orderby('id','desc') เรียงลำดับจากมากไปน้อย asc น้อยไปมาก
    //-> get(); ดึงข้อมมูลในรูปแบบ array 
    //-> first(); ดึงข้อมูลตัวแรกตัวเดียว ไม่อยู่ในแบบ array
    //-> count(); นับจำนวนข้อมูลที่ดึงออกมา
    //where เงื่อนไขคล้าย sql get ดึงข้อมูลออกมาในรูปแบบของ array

    //-> with('teacher')
    //-> wherehas('teacher',function($query){ $query -> where('id','100');})
    //ทำงานที่ relation teacher wherehas คำสั่งค้นหาใน relation หาในตาราง teacher แล้วใช้ฟังก์ชั่นคิวรี่ที่ ไอดี = 100

    //$c = Country::all();
    //dd($c[0]->region);

    //$r = Region::all();
    //dd($r[0]->country);

    //$t = Teacher::find(1);
    //dd($c[0]->region[0]->province[0]->teacher[0]);
    //dd($t->province->region->country);

    // การ query orm
    /*$model = Student::query()
    -> where('name','LIKE','g%')
    -> where('lastname','LIKE','n%')
    -> where('email','LIKE','a%')
    -> where('province_id','4')
    -> wherebetween('id',[30,70])
    -> orderby('name','desc')
    -> get();
    dd($model);*/

    /*การค้นหาใน relation 1:m wherehas
    $p = Province::query()
    -> with('teacher') 
    -> wherehas('teacher',function($query){ $query 
        -> where('id','100');
            })
    -> get();
    dd($p);*/

    /*echo "# third_week" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/korakodse/third_week.git
git push -u origin main*/