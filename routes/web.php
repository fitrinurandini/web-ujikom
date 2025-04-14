<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Tampilkan halaman welcome saat membuka root URL
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Routing untuk login, hanya untuk yang belum login (guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

// Redirect default setelah login
Route::get('/home', function () {
    return redirect('/admin');
});

// Routing untuk pengguna yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/admin/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::post('/logout', [SesiController::class, 'logout'])->name('logout'); // Menggunakan post untuk logout
});

// Rute admin dengan userAkses:admin untuk memastikan hanya admin yang bisa mengaksesnya
Route::prefix('admin')->middleware(['auth', 'userAkses:admin'])->name('admin.')->group(function () {
    // Rute resource untuk users dengan nama prefix admin
    Route::resource('users', UserController::class)->names([
        'index' => 'users.index',
        'create' => 'users.create',
        'store' => 'users.store',
        'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'destroy' => 'users.destroy',
    ]);
});

