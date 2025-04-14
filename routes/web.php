<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;

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
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin')->name('index');
    Route::get('/admin/datauser', [UserController::class, 'index'])->middleware('userAkses:admin')->name('datauser');
    Route::post('/admin/datauser', [UserController::class, 'store'])->name('users.store');
    Route::put('/admin/datauser/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/user/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('modules', [ModuleController::class, 'index'])->name('modules.index');
    Route::post('modules', [ModuleController::class, 'store'])->name('modules.store');
    Route::get('modules/{module}/edit', [ModuleController::class, 'edit'])->name('modules.edit');
    Route::put('modules/{module}', [ModuleController::class, 'update'])->name('modules.update');
    Route::delete('modules/{module}', [ModuleController::class, 'destroy'])->name('modules.destroy');

});


Route::post('/logout', [SesiController::class, 'logout'])->name('logout'); // Menggunakan post untuk logout

