<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Mail\sendMailRegister;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function register() {
        return view("admin.register");
    }

    public function storeUser(AccountRequest $request) {
        // dd($request);

        $admin = [
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->role
        ];
        $result = Admin::create($admin);
        if($result) {
            Mail::to($request->email)->send(new sendMailRegister());
            return redirect()->route('admin.list');
        }
    }

    public function loginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $dataLogin = $request->only(["email", "password"]);
        $checkLogin = Auth::guard("admin")->attempt($dataLogin);
        if (!$checkLogin) {
            return redirect()->back()->with("error", "Tài khoản hoặc mật khẩu không chính xác");
        }
        return redirect()->route("list");
    }
}
