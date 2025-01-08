<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request){
        // $data = $request->except(['_token', 'wp-submit-login', 'redirect']);
        if (Auth::attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ])) {
            DB::table('personal_access_tokens') 
                        -> where('tokenable_id', Auth::id()) 
                        -> delete();
            $token = User::find(Auth::id()) 
                        -> createToken(Auth::user() -> name) 
                        -> plainTextToken;
            
            if(Auth::user() -> is_admin){
                return response() -> json([
                    'data' => Auth::user(),
                    'token' => $token,
                    'status' => 200,
                    'message' => 'Đăng nhập thành công',
                    'is_admin' => true
                ]);
            }
            return response() -> json([
                'data' => Auth::user(),
                'token' => $token,
                'status' => 200,
                'message' => 'Đăng nhập thành công',
                'is_admin' => false
            ]);
        }

        return response() -> json([
            'data' => null,
            'status' => 200,
            'message' => 'Đăng nhập thất bại'
        ]);
    }
}
