<?php

use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//Route::resource('teacher',TeacherController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// กำหนด route api login
Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum',]],
    function () {
        Route::resource('teacher',TeacherController::class);
        Route::post('logout',[AuthController::class,'logout']);
    }
);
