<?php

namespace App\Http\Controllers;

use App\Mail\sendMailRegister;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function register(Request $request) {
        return view("admin.register");
    }

    public function storeUser(Request $request) {

        $admin = [
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ];
        $result = Admin::create($admin);
        if($result) {
            Mail::to($request->email)->send(new sendMailRegister());
            return redirect()->route('home')->with("success", "Đăng ký thành công");
        }
    }

    public function loginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $dataLogin = $request->only(["email", "password"]);
        $checkLogin = Auth::guard("admin")->attempt($dataLogin);
        if (!$checkLogin) {
            return redirect()->route("loginForm");
        }
        return redirect()->route("home");
    }
}
