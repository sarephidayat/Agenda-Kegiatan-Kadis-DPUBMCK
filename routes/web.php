<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SubKoorController;
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

    // Halaman input agenda eksternal
    Route::get('/tambah-agenda-eksternal', [TUBidangController::class, 'tambahAgendaEksternal'])->name('tambahAgendaEksternal');

    // Halaman input agenda internal
    Route::get('/tambah-agenda-internal', [TUBidangController::class, 'tambahAgendaInternal'])->name('tambahAgendaInternal');

    // proses simpan agenda
    Route::post('/', [TUBidangController::class, 'store'])->name('store');

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
});


// Sekelompok route untuk Sub-Koor
Route::prefix('sub-koor')->name('sub-koor.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [SubKoorController::class, 'index'])->name('index');

    // Halaman input agenda
    Route::get('/tambah-agenda', [SubKoorController::class, 'tambah'])->name('tambah');

    // proses simpan agenda
    Route::post('/', [SubKoorController::class, 'store'])->name('store');

    // Halaman agenda eksternal
    Route::get('/agenda-eksternal', [SubKoorController::class, 'agendaEksternal'])->name('agendaEksternal');

    // Halaman agenda internal
    Route::get('/agenda-internal', [SubKoorController::class, 'agendaInternal'])->name('agendaInternal');

    //halaman edit data
    Route::get('/edit/{id}', [SubKoorController::class, 'edit'])->name('edit');

    // Proses update data
    Route::post('/update/{id}', [SubKoorController::class, 'update'])->name('update');
});


// Sekelompok route untuk Staff
Route::prefix('staff')->name('staff.')->group(function () {
    // Halaman dashboard TU
    Route::get('/', [StaffController::class, 'index'])->name('index');

    // Halaman input agenda
    Route::get('/tambah-agenda', [StaffController::class, 'tambah'])->name('tambah');

    // proses simpan agenda
    Route::post('/', [StaffController::class, 'store'])->name('store');

    // Halaman agenda eksternal
    Route::get('/agenda-eksternal', [StaffController::class, 'agendaEksternal'])->name('agendaEksternal');

    // Halaman agenda internal
    Route::get('/agenda-internal', [StaffController::class, 'agendaInternal'])->name('agendaInternal');

    //halaman edit data
    Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('edit');

    // Proses update data
    Route::post('/update/{id}', [StaffController::class, 'update'])->name('update');
});