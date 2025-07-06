<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TUBidangController;
use App\Http\Controllers\AgendaKadisController;
use App\Http\Controllers\SekretarisDinasController;

Route::get('/', function () {
    return view('index');
});

// untuk controller AgendaKadisController halaman CobaDatabase
Route::get('/agenda', [AgendaKadisController::class, 'index']);
Route::post('/agenda', [AgendaKadisController::class, 'store'])->name('agenda.store');

// Sekelompok route untuk SekretarisDinasController
Route::prefix('sekretaris-dinas')->name('sekretaris-dinas.')->group(function () {
    // Halaman tabel data
    Route::get('/', [SekretarisDinasController::class, 'index'])->name('index');

    // Form tambah data
    Route::get('/tambah-data', [SekretarisDinasController::class, 'create'])->name('create');

    // Proses simpan data
    Route::post('/', [SekretarisDinasController::class, 'store'])->name('store');

    // Form edit data
    Route::get('/edit/{id}', [SekretarisDinasController::class, 'edit'])->name('edit');

    // Proses update data
    Route::post('/update/{id}', [SekretarisDinasController::class, 'update'])->name('update');

});

// Sekelompok route untuk TUBidangController
Route::prefix('tu-bidang')->name('tu-bidang.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [TUBidangController::class, 'index'])->name('index');
});

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
