<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('user.login');
        }
    }

    public function adminLogin()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('admin.login');
        }
    }
    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->status == 'admin' && $user->active) {
                return redirect('dashboard');
            } else if ($user->active) {
                return redirect('home');
            } else {
                Auth::logout();
                Session::flash('error', 'Akun anda belum dierifikasi. Silahkan cek email anda');
                return redirect('/');
            }
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/');
        }
    }
    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
