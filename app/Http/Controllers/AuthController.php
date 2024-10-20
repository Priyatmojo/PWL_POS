<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
Use illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function login() {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function postlogin(Request $request) {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                if (Auth::user()->image_profile != "") {
                    session(['profil_img_path' => Auth::user()->user_id]);
                }
                session(['user_id' => Auth::user()->user_id]);
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Login Gagal',
            ]);
        }

        return redirect('login');
    }

    public function register(){
        return view('auth.register');
    }

    public function postRegister(Request $request) {
        if ($request->ajax() || $request->wantsJson()) {
            $request->validate([
                'username' => 'required|string|min:3|unique:m_user,username',
                'nama' => 'required|string|max:100',
                'password' => 'required|min:5'
            ]);

            UserModel::create([
                'username' => $request->username,
                'nama' => $request->nama,
                'password' => bcrypt($request->password),
                'level_id' => 3
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Register Berhasil',
                'redirect' => url('/login')
            ]);
        }

        return redirect('register');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}