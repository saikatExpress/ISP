<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\HumanresourcesController;

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
    Route::post('/storedesignation', [HumanresourcesController::class, 'storing_Designation'])->name('go_storedesignation');
    Route::get('/readdesignation', [HumanresourcesController::class, 'readingdesignation'])->name('go_readdesignation');
    Route::get('editdesignation/{data_id} ', [HumanresourcesController::class, 'editingdesignation'])->name('go.editdesignation');
    Route::post('editdesignation', [HumanresourcesController::class, 'editstoredesignation'])->name('go.editstoredesignation');
    Route::delete('deletedesignation', [HumanresourcesController::class, 'deletedesignation'])->name('go.deletedesignation');



    Route::get('/dashboard', [HumanresourcesController::class, 'dashboard_index'])->name('go.dashboard');

    

    Route::get('/employeelist', [HumanresourcesController::class, 'employeelist_index'])->name('go.employeelist');
    Route::post('/storeemployeelist', [HumanresourcesController::class, 'storing_employeelist'])->name('go.storeemployeelist');
    Route::get('/reademployeelist', [HumanresourcesController::class, 'readingemployeelist'])->name('go.reademployeelist');
    Route::get('viewemployeelist/{data_id} ', [HumanresourcesController::class, 'viewingemployeelist'])->name('go.viewemployeelist');
    Route::get('editemployeelist/{data_id} ', [HumanresourcesController::class, 'editemployeelist'])->name('go.editemployeelist');
    Route::post('editemployeelist', [HumanresourcesController::class, 'editstoreemployeelist'])->name('go.editstoreemployeelist');
    Route::delete('deleteemployeelist', [HumanresourcesController::class, 'deleteemployeelist'])->name('go.deleteemployeelist');



    Route::get('/dailyattendance', [HumanresourcesController::class, 'dailyattendance'])->name('go.dailyattendance');
    Route::get('/attendance', [HumanresourcesController::class, 'index'])->name('attendance.index');
    Route::post('/attendance/store', [HumanresourcesController::class, 'store'])->name('attendance.store');



    Route::get('/monthlyattendance', [HumanresourcesController::class, 'monthlyattendance'])->name('go.monthlyattendance');

    Route::get('/attendancehistory', [HumanresourcesController::class, 'attendancehistory'])->name('go.attendancehistory');

    Route::get('/searching', [HumanresourcesController::class, 'searching'])->name('g.searching');


    Route::get('/loanmanagement', [HumanresourcesController::class, 'loanmanagement'])->name('go.loanmanagement');

    Route::get('/salarymanagement', [HumanresourcesController::class, 'salarymanagement'])->name('go.salarymanagement');
    Route::get('/salaryattendance', [HumanresourcesController::class, 'salary_index'])->name('salaryattendance.index');
    Route::post('/salaryattendance/store', [HumanresourcesController::class, 'salaryattendance_store'])->name('salaryattendance.store');
    

    


    Route::get('/logout', [AuthController::class, 'logout']);

});

 // For HumanresourcesController Route

