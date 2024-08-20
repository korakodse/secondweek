<?php

use App\Models\Country;
use App\Models\Region;
use App\Models\Province;
use App\Models\Teacher;
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

    // คำสั่ง debug
    // การ query
    //$model = \App\Models\Province::all();
    //dd($model);

    //$c = Country::all();
    //dd($c[0]->region);

    //$r = Region::all();
    //dd($r[0]->country);

    $t = Teacher::find(1);
    //dd($c[0]->region[0]->province[0]->teacher[0]);
    dd($t->province->region->country);
    
    return view('welcome');
});
