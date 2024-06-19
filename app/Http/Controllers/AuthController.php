<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (auth()->user()) {
            return redirect()->route('dashboard');
        }
        return view("auths.login");
    }

    // Xử lý yêu cầu đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::guard('web')->login($user);
            $check = Session::get('unlogin');
            if (isset($check)) {
                Session::forget('unlogin');
                return redirect()->route('dashboard');
            }
            return redirect()->intended('admin/dashboard')->with('success', 'Đăng nhập thành công!');
        }

        // Đăng nhập thất bại
        return redirect()->back()->withErrors([
            'email|password' => 'Vui lòng kiểm tra lại tài khoản hoặc mật khẩu của bạn.',
        ]);
    }


    // Xử lý yêu cầu đăng xuất
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/auth/login');
    }

    // Update all information of user
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;

        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->password) {
            if ($request->password != $request->password_confirmation) {
                return redirect()->back()->withErrors([
                    'password' => 'Password and confirm password do not match!',
                ])->withInput($request->only('email'));
            }
            $user->password = Hash::make($request->password);
        }

        if ($request->name) {
            $user->name = $request->name;
        }

        $saved = $user->save();
        if ($saved) {
            return redirect()->route('user_dashboard')->with('success', 'Update profile successfully!');
        }

        return redirect()->back()->withErrors([
            'name' => 'Please enter your username!',
            'email' => 'Please enter your email!',
            'password' => 'Please enter your password!',
        ])->withInput($request->only('email'));
    }
}
