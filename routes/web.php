<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SettingController;
use App\Models\Module;
use App\Models\Setting;


// Tampilkan halaman welcome saat membuka root URL
Route::get('/', function () {
    $modules = Module::where('status', 1)->orderBy('index_module')->get();
    $setting = Setting::first(); // Ambil setting
    return view('welcome', compact('modules', 'setting'));
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

    // Tag
Route::get('/admin/tag', [TagController::class, 'index'])->name('tag.index');
Route::post('/admin/tag', [TagController::class, 'store'])->name('tag.store');
Route::put('/admin/tag/{tag}', [TagController::class, 'update'])->name('tag.update');
Route::delete('/admin/tag/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');

// Article
Route::get('/admin/article', [ArticleController::class, 'index'])->name('article.index');
Route::post('/admin/article', [ArticleController::class, 'store'])->name('article.store');
Route::put('/admin/article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/admin/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::resource('articles', ArticleController::class);
Route::resource('/article/tag', \App\Http\Controllers\TagController::class)->names('tags');

// Settings
Route::prefix('admin/settings')->name('settings.')->middleware(['auth'])->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
    Route::put('/profile', [SettingController::class, 'updateProfile'])->name('profile.update');
    Route::put('/contact', [SettingController::class, 'updateContact'])->name('contact.update');
    Route::put('/socialmedia', [SettingController::class, 'updateSocialMedia'])->name('socialmedia.update');
});



});


Route::post('/logout', [SesiController::class, 'logout'])->name('logout'); // Menggunakan post untuk logout

