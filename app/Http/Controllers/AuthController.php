<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password'=> 'required|min:8',
            ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Bad Request',
                'status_code' => 400,
                ]);
            }else{

                $data = request(['email','password']);

                if(Auth::attempt($data)){
                    //ค้นหา user ผ่าน email
                    $user = User::where('email',$request->email)->first();
                    //สร้าง token และเก็บไว้ใน token
                    $tokenResult = $user->createToken('authToken')->plainTextToken;

                    return response()->json([[
                        "message" => "Login Success",
                        "Status Code" => "200",
                        "user token" => $user,
                        "token" => $tokenResult,
                    ]]);
                }else{
                    return response()->json([
                    'message' => 'email or password wrong',
                        ]);
                    }
        }
    }

    public function logout(Request $req){
        $req->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'Logout Complete',
        ]);
    }
}




        //dd($request->email." ".$request->password); ลองแสดงค่าที่รับเข้ามา
        //dd($request->only(["email","password"]));
