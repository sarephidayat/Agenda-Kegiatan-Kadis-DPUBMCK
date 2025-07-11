<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Ganti dengan view login kamu
    }

    // Proses login
    public function login(Request $request)
    {
        // 1. Validasi input terlebih dahulu
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // 2. Cari user berdasarkan username
        $user = User::where('username', $username)->first();

        // 3. Cek apakah user ditemukan dan password cocok
        if (!$user || !Hash::check($password, $user->password)) {
            return back()->with('error', 'Username atau password salah.');
        }

        // 4. Login user ke sistem
        Auth::login($user);

        // 5. Ambil id_jabatan dan id_bidang user
        $idJabatan = $user->id_jabatan;
        $idBidang = $user->id_bidang;

        // 6. Tentukan redirect berdasarkan jabatan & bidang
        if ($idJabatan == 1) {
            return redirect()->route('kepala-dinas');
        } elseif ($idJabatan == 2 && $idBidang == 2) {
            return redirect()->route('sekretaris-dinas.index');
        } elseif (
            in_array($idJabatan, [3, 4, 5]) && $idBidang == 2 ||
            in_array($idJabatan, [7, 8, 9]) && $idBidang == 3 ||
            in_array($idJabatan, [11, 12, 13]) && $idBidang == 4 ||
            in_array($idJabatan, [15, 16, 17]) && $idBidang == 5 ||
            in_array($idJabatan, [19, 20, 21]) && $idBidang == 6
        ) {
            // Sub koor: kepala seksi, kepala sub bagian, dll
            return redirect()->route('sub-koor.index', ['id_bidang' => $idBidang]);
        } elseif (
            ($idJabatan == 6 && $idBidang == 3) ||
            ($idJabatan == 10 && $idBidang == 4) ||
            ($idJabatan == 14 && $idBidang == 5) ||
            ($idJabatan == 18 && $idBidang == 6)
        ) {
            // Kepala bidang
            return redirect()->route('tu-bidang.index', ['id' => $idBidang]);
        } elseif (in_array($idJabatan, [22, 23, 24, 25, 26])) {
            // Staff
            return redirect()->route('staff.index', ['id_bidang' => $idBidang]);
        } else {
            return back()->with('error', 'Role Anda belum dikonfigurasi.');
        }
    }



    // Logout
    public function logout()
    {
        session()->forget(['login', 'user']);
        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}
