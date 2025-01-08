<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
       
        $data = $request->except(['_token', 'wp-submit-login', 'redirect']);
        if (Auth::attempt($data)) {
            if(Auth::user() -> is_admin){
                return redirect() -> to('/admin/room/index');
            }
            return redirect() -> to('/');
        }
        return redirect() -> back();
    }

    public function logout(Request $request){
        Auth::logout();
        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();
        return redirect('/');
    }
}
