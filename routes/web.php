<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\admin\ApplicationController as AdminApplicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware('auth')->group(
    function () {
        Route::resource('application', ApplicationController::class);
    }
);

Route::get('/new1', function () {
    return view('new1');
});
Route::get('/new2', function () {
    return view('new2');
});
Route::get('/new3', function () {
    return view('new3');
});


// admin routes

Route::get('uniadmin', function () {
    return view('dashboard.login');
})->name('uniadmin');

Route::post('uniadmin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('uniadmin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');




Route::get('uniadmin/index', function () {
    return view('dashboard.index');
})->name('uniadmin.index');

Route::middleware('auth')->prefix('uniadmin')->group(
    function () {
        Route::resource('uniapplication', AdminApplicationController::class);
    }
);
