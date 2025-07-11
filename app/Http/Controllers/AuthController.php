<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Ganti dengan view login kamu
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Proses login manual (tanpa guard)
        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan data ke session
            session(['login' => true, 'user' => $user]);
            return redirect()->route('dashboard'); // Ganti ke halaman setelah login
        }

        return back()->with('error', 'Username atau password salah!');
    }

    // Logout
    public function logout()
    {
        session()->forget(['login', 'user']);
        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}
