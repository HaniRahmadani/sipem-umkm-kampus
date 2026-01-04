<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UmkmAuthController extends Controller
{
    // TAMPILKAN FORM LOGIN
    public function showLogin()
    {
        return view('auth.login_umkm');
    }

    // PROSES LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // CEK ROLE HARUS UMKM
            if (auth()->user()->role !== 'umkm') {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun ini bukan pemilik UMKM',
                ]);
            }

            return redirect('/umkm/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    // LOGOUT UMKM
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/umkm');
    }
}