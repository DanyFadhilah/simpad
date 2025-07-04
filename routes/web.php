<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');    
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])
         ->name('dashboard');

    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])
         ->name('admin.dashboard')
         ->middleware('IsPsi');

    Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])
         ->name('user.dashboard');
});

Route::get('/get-users', [App\Http\Controllers\UserController::class, 'index']);
