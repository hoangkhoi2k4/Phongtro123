<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdatePasswordRequest;
use App\Http\Requests\UserUpdatePhoneRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class UserProfileController extends Controller
{
    public function home() {
        return view('user.profile.index');
    }
    public function index() {
        $user = User::find(Auth::user() -> id);
        if(!$user) return abort(404);
        return view('user.profile.update', compact('user'));
    }

    public function update(Request $request) {
        $user = User::find(Auth::user() -> id);
        if(!$user) return abort(404);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->facebook = $request->facebook;
        $user->avatar = $request->avatar;
        $user->save();
        return redirect()->route('get_user.profile.index');
    }

    public function updatePhone() {
        $user = User::find(Auth::user() -> id);
        if(!$user) return abort(404);
        return view('user.profile.update_phone', compact('user'));
    }

    public function processUpdatePhone(UserUpdatePhoneRequest $request){
        
    }

    public function updatePassword(){
        $user = User::find(Auth::user() -> id);
        if(!$user) return abort(404);
        return view('user.profile.update_password', compact('user'));
    }

    public function processUpdatePassword(UserUpdatePasswordRequest $request){
        $user = User::find(Auth::user() -> id);
        // Check old password
        if (!Hash::check($request->input('old_password'), $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu cũ không đúng');
        }

        // Update new password
        $user->update([
            'password' => Hash::make($request->input('password'))
        ]);
        // Logout

        Auth::logout();
        return redirect()->route('login')->with('success', 'Mật khẩu đã được cập nhật thành công');
    }

    public function depositHistory(){
        return view('user.profile.deposit_history');
    }
    public function paymentHistory(){
        return view('user.profile.payment_history');
    }
    public function priceList(){
        return view('user.profile.price_list');
    }
    public function deposit(){
        return view('user.profile.deposit');
    }
    public function makePayment(){
        return view('user.profile.make_payment');
    }
}
