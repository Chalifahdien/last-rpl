<?php

use App\Models\Post;
use App\Models\Pengguna;
use App\Models\Pekerjaan;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;





// ----------------------LOGIN------------------------//
Route::get('/login', function () {
    return view('Login/login', ['tittle' => 'Login']);
});
Route::get('/register', function () {
    return view('Login/register', ['tittle' => 'Register']);
});
Route::get('/forgot-password', function () {
    return view('Login/forgot-password', ['tittle' => 'Forgot Password']);
});

// ----------------------USER-------------------------//
Route::get('/', function () {
    return view('user/index', [
        'tittle' => ' ',
        'name' => 'Chalifahdien Hamud'

    ]);
});

Route::get('/ajukan', function () {
    return view('user/Pekerjaan/ajukan', [
        'tittle' => 'Detail Pekerjaan',
        'name' => 'Chalifahdien Hamud'

    ]);
});

Route::get('/ambil', function () {
    return view('user/Pekerjaan/ambil', [
        'tittle' => 'Pekerjaan Tersedia',
        'name' => 'Chalifahdien Hamud',
        'posts' => Post::all()
    ]);
});

Route::get('ambil/{post:slug}', function (Post $post) {

    return view('user/pekerjaan/detail', [
        'tittle' => 'Detail Pekerjaan',
        'name' => 'Chalifahdien Hamud',
        'post' => $post
    ]);
});


// ----------------------Admin-------------------------//
Route::get('/admin', function () {
    return view('admin/index', [
        'tittle' => 'Admin',
        'pekerjaans' => Pekerjaan::all(),
        'total_pengguna' => Pengguna::hitungTotalPengguna()
    ]);
});

Route::get('/user', function () {
    return view('admin/user', [
        'tittle' => 'User',
        'penggunas' => Pengguna::all()
    ]);
});

Route::get('/request', function () {
    return view('Admin/Pekerjaan/permintaan', [
        'tittle' => 'Permintaan Pengajuan',
        'pekerjaans' => Pekerjaan::all()
    ]);
});

Route::get('/ongoing', function () {
    return view('Admin/Pekerjaan/berjalan', ['tittle' => 'Ongoing']);
});

Route::get('/history', function () {
    return view('Admin/Pekerjaan/riwayat', [
        'tittle' => 'Riwayat Pekerjaan',
        'pekerjaans' => Pekerjaan::all()
    ]);
});