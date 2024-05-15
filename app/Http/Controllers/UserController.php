<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Mail\sendMailRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register() {
        return view('user.register');
    } 

    public function storeUser(AccountRequest $request) {
        $param = $request->except('_token');
        $result = User::create($param);
        if($result) {
            Mail::to($request->email)->send(new sendMailRegister());
            return redirect()->route('home')->with("success", "Đăng ký tài khoản thành công");
        }
    }

    public function loginForm() {
        return view('user.login');
    }

    public function login(AccountRequest $request) {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with("error", "Tài khoản hoặc mật khẩu không chính xác");
        }
        return redirect()->route("home");
    }
}
