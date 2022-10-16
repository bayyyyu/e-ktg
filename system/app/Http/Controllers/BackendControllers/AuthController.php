<?php

namespace App\Http\Controllers\BackendControllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('auth/login');
    }
    function loginProcess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('backend/dashboard')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal, Silahlan cek email dan password anda');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('auth/login');
    }

    function forgotPassword()
    {
        return view('auth/login');
    }
}
