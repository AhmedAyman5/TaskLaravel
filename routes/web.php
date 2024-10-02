<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::prefix('/employees')->name('employees.')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('store');
    Route::get('/edit/{employee}', [EmployeeController::class, 'edit'])->name('edit');
    Route::post('/update{employee}', [EmployeeController::class, 'update'])->name('update');
    Route::get('/delete{employee}', [EmployeeController::class, 'destroy'])->name('destroy');
    
});

Route::prefix('/managers')->name('managers.')->group(function () {
    Route::get('/', [ManagerController::class, 'index'])->name('index');
    //Route::get('/create', [ManagerController::class, 'create'])->name('managers.index');
    //Route::get('/edit', [ManagerController::class, 'edit'])->name('managers.index');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/action', [AuthController::class, 'loginAction'])->name('login.action');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/action', [AuthController::class, 'registerAction'])->name('register.action');
});

