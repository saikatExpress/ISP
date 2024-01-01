<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesignationController;

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

Route::get('/', [AdminController::class, 'landingPage'])->name('login');

Route::get('/admin/login', [AdminController::class, 'adminLogin']);
Route::get('/seller/login', [AdminController::class, 'sellerLogin']);
Route::get('/customer/login', [AdminController::class, 'customerLogin']);

Route::post('/admin/login/store', [AuthController::class, 'adminLoginStore'])->name('admin.login');
Route::post('/seller/login', [AuthController::class, 'sellerLoginStore']);
Route::post('/customer/store', [AuthController::class, 'customerLoginStore']);

Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('/seller/dashboard', [AdminController::class, 'sellerDashboard']);
    Route::get('/customer/dashboard', [AdminController::class, 'customerDashboard']);

    // For Designation Route
    Route::get('/designation/list', [DesignationController::class, 'index'])->name('designation.list');

    Route::get('/logout', [AuthController::class, 'logout']);
});
