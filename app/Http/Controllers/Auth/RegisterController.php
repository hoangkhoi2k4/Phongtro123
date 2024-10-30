<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = Carbon::now();

        $user = User::create($data);
        if($user){
            Auth::login($user);
            if(Auth::check()){
                return redirect()->route("home");
            }
        }

        return redirect() -> back();
    }
}
