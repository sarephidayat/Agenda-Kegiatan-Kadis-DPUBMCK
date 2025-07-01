<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/kadis', function () {
    return view('Kadis/dashboard');
});

Route::get('/staff', function () {
    return view('Staff/dashboard');
});

Route::get('/sub-koor', function () {
    return view('Sub-Koor/dashboard');
});

Route::get('/tu', function () {
    return view('TU/dashboard');
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
