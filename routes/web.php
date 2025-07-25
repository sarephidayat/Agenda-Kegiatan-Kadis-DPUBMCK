<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SubKoorController;
use App\Http\Controllers\TUBidangController;
use App\Http\Controllers\AgendaKadisController;
use App\Http\Controllers\SekretarisDinasController;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/chart2', function () {
    return view('chart2');
});

Route::get('/api/chart-agenda-eksternal-mingguan', [ChartController::class, 'chartAgendaEksternalPerMinggu']);
Route::get('/api/chart-agenda-internal-mingguan', [ChartController::class, 'chartAgendaInternalPerMinggu']);


// Route untuk autentikasi
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/sekretaris-dinas', [SekretarisDinasController::class, 'index'])->name('sekretaris-dinas.index');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/tu-bidang', [TUBidangController::class, 'index'])->name('tu-bidang.index');
    Route::get('/sub-koor', [SubKoorController::class, 'index'])->name('sub-koor.index');
});

Route::get('/sekretaris-dinas', [SekretarisDinasController::class, 'index'])
    ->name('sekretaris-dinas.index')
    ->middleware('Auth');

// Tampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/proses', [AuthController::class, 'login'])->name('proses');

//proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// untuk controller AgendaKadisController halaman CobaDatabase
Route::get('/agenda', [AgendaKadisController::class, 'index']);
Route::post('/agenda', [AgendaKadisController::class, 'store'])->name('agenda.store');

// Sekelompok route untuk TUBidangController
Route::prefix('tu-bidang')->name('tu-bidang.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [TUBidangController::class, 'index'])->name('index');

    // Halaman agenda eksternal
    Route::get('/agenda-eksternal', [TUBidangController::class, 'agendaEksternal'])->name('agendaEksternal');

    // Halaman agenda internal
    Route::get('/agenda-internal', [TUBidangController::class, 'agendaInternal'])->name('agendaInternal');

    //halaman edit data eksternal
    Route::get('/editEksternal/{id}', [TUBidangController::class, 'editEksternal'])->name('editEksternal');

    //halaman edit data internal
    Route::get('/editInternal/{id}', [TUBidangController::class, 'editInternal'])->name('editInternal');

    // Proses update data
    Route::post('/updateEksternal/{id}', [TUBidangController::class, 'updateEksternal'])->name('updateEksternal');

    // Proses update data
    Route::post('/updateInternal/{id}', [TUBidangController::class, 'updateInternal'])->name('updateInternal');
});



// Sekelompok route untuk SekretarisDinasController
Route::prefix('sekretaris-dinas')->name('sekretaris-dinas.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [SekretarisDinasController::class, 'index'])->name('index');

    // Halaman input agenda eksternal
    Route::get('/tambah-agenda-eksternal', [SekretarisDinasController::class, 'tambahAgendaEksternal'])->name('tambahAgendaEksternal');

    // Halaman input agenda internal
    Route::get('/tambah-agenda-internal', [SekretarisDinasController::class, 'tambahAgendaInternal'])->name('tambahAgendaInternal');

    // proses simpan agenda
    Route::post('/eksternal', [SekretarisDinasController::class, 'storeEksternal'])->name('storeEksternal');

    // proses simpan agenda
    Route::post('/internal', [SekretarisDinasController::class, 'storeInternal'])->name('storeInternal');

    // Halaman agenda eksternal
    Route::get('/agenda-eksternal', [SekretarisDinasController::class, 'agendaEksternal'])->name('agendaEksternal');

    // Halaman agenda internal
    Route::get('/agenda-internal', [SekretarisDinasController::class, 'agendaInternal'])->name('agendaInternal');

    //halaman edit data eksternal
    Route::get('/editEksternal/{id}', [SekretarisDinasController::class, 'editEksternal'])->name('editEksternal');

    //halaman edit data internal
    Route::get('/editInternal/{id}', [SekretarisDinasController::class, 'editInternal'])->name('editInternal');

    // Proses update data
    Route::post('/updateEksternal/{id}', [SekretarisDinasController::class, 'updateEksternal'])->name('updateEksternal');

    // Proses update data
    Route::post('/updateInternal/{id}', [SekretarisDinasController::class, 'updateInternal'])->name('updateInternal');
});



// Sekelompok route untuk StaffController
Route::prefix('staff')->name('staff.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [StaffController::class, 'index'])->name('index');

    // Halaman agenda eksternal
    Route::get('/agenda-eksternal', [StaffController::class, 'agendaEksternal'])->name('agendaEksternal');

    // Halaman agenda internal
    Route::get('/agenda-internal', [StaffController::class, 'agendaInternal'])->name('agendaInternal');
});


// Sekelompok route untuk SubKoorController
Route::prefix('sub-koor')->name('sub-koor.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [SubKoorController::class, 'index'])->name('index');

    // Halaman input agenda eksternal
    Route::get('/tambah-agenda-eksternal', [SubKoorController::class, 'tambahAgendaEksternal'])->name('tambahAgendaEksternal');

    // Halaman input agenda internal
    Route::get('/tambah-agenda-internal', [SubKoorController::class, 'tambahAgendaInternal'])->name('tambahAgendaInternal');

    // proses simpan agenda
    Route::post('/eksternal', [SubKoorController::class, 'storeEksternal'])->name('storeEksternal');

    // proses simpan agenda
    Route::post('/internal', [SubKoorController::class, 'storeInternal'])->name('storeInternal');

    // Halaman agenda eksternal
    Route::get('/agenda-eksternal', [SubKoorController::class, 'agendaEksternal'])->name('agendaEksternal');

    // Halaman agenda internal
    Route::get('/agenda-internal', [SubKoorController::class, 'agendaInternal'])->name('agendaInternal');

    //halaman edit data eksternal
    Route::get('/editEksternal/{id}', [SubKoorController::class, 'editEksternal'])->name('editEksternal');

    //halaman edit data internal
    Route::get('/editInternal/{id}', [SubKoorController::class, 'editInternal'])->name('editInternal');

    // Proses update data
    Route::post('/updateEksternal/{id}', [SubKoorController::class, 'updateEksternal'])->name('updateEksternal');

    // Proses update data
    Route::post('/updateInternal/{id}', [SubKoorController::class, 'updateInternal'])->name('updateInternal');
});