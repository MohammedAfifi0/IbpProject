<?php

use App\Http\Controllers\Admin\IndexContoller;
use App\Http\Controllers\Admin\PermissionContoller;
use App\Http\Controllers\Admin\RoleContoller;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexContoller::class, 'index'])->name('index');
    Route::resource('/roles', RoleContoller::class);
    Route::resource('/permissions', PermissionContoller::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pomodoro', function () {
    return view('pomodoro.app');
})->name('pomodoro');

Route::get('/adminlte', function () {
    return view('layouts.adminlte');
});


Route::get('/shop', function () {
    return view('shop.shop');
})->name('shop');



require __DIR__ . '/auth.php';
