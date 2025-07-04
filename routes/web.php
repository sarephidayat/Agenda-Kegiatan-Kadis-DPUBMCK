<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaKadisController;

Route::get('/', function () {
    return view('CobaDatabase');
});

Route::get('/agenda', [AgendaKadisController::class, 'index']);
Route::post('/agenda', [AgendaKadisController::class, 'store'])->name('agenda.store');


Route::get('/dashboard', function () {
    return view('dashboard');
});

// Halaman Kepala Dinas
Route::get('/kadis', function () {
    return view('Kadis/dashboard');
});

Route::get('/kadis/daftarAgenda', function () {
    return view('Kadis/daftarAgenda');
});

// Halaman Staff
Route::get('/staff', function () {
    return view('Staff/dashboard');
});

Route::get('/staff/daftarAgenda', function () {
    return view('Staff/daftarAgenda');
});

// Halaman Sub-Koor
Route::get('/sub-koor', function () {
    return view('Sub-Koor/dashboard');
});

Route::get('/sub-koor/daftarAgenda', function () {
    return view('Sub-Koor/daftarAgenda');
});

// Halaman TU
Route::get('/tu', function () {
    return view('TU/dashboard');
});

Route::get('/tu/daftarAgenda', function () {
    return view('TU/daftarAgenda');
});

// Route::get('/DaftarRuang', function () {
//     return view('Mahasiswa/DaftarRuang');
// });
// Route::get('/DaftarPeminjam', function () {
//     return view('DaftarPeminjam');
// });
// Route::get('/approvalAlat', function () {
//     return view('PeminjamanAlat/approvalAlat');
// });
// Route::get('/approvalAlatComplete', function () {
//     return view('PeminjamanAlat/approvalAlatComplete');
// });
// Route::get('/approvalRuang', function () {
//     return view('PeminjamanRuang/approvalRuang');
// });
// Route::get('/approvalRuangComplete', function () {
//     return view('PeminjamanRuang/approvalRuangComplete');
// });
// Route::get('/login', function () {
//     return view('templateLogin/login');
// });
