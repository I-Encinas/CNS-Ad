<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
    Route::get('/',[\App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
    Route::get('/create',[\App\Http\Controllers\EmployeeController::class, 'create'])->name('create');
    Route::post('/',[\App\Http\Controllers\EmployeeController::class, 'store'])->name('store');
    Route::get('/{employee}/edit',[\App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit');
    Route::post('/bulk-destroy',[\App\Http\Controllers\EmployeeController::class, 'Destroy'])->name('bulk-destroy');
    Route::post('/{employee}',[\App\Http\Controllers\EmployeeController::class, 'update'])->name('update');
    Route::delete('/{employee}',[\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('destroy');


Route::resource('/services', App\Http\Controllers\ServiceController::class);
    Route::get('/',[\App\Http\Controllers\ServiceController::class, 'index'])->name('index');
    Route::get('/create',[\App\Http\Controllers\ServiceController::class, 'create'])->name('create');
    Route::post('/',[\App\Http\Controllers\ServiceController::class, 'store'])->name('store');
    Route::get('/{service}/edit',[\App\Http\Controllers\ServiceController::class, 'edit'])->name('edit');
    Route::post('/bulk-destroy',[\App\Http\Controllers\ServiceController::class, 'Destroy'])->name('bulk-destroy');
    Route::post('/{service}',[\App\Http\Controllers\ServiceController::class, 'update'])->name('update');
    Route::delete('/{service}',[\App\Http\Controllers\ServiceController::class, 'destroy'])->name('destroy');


Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::get('/',[\App\Http\Controllers\UserController::class, 'index'])->name('index');
    Route::get('/create',[\App\Http\Controllers\UserController::class, 'create'])->name('create');
    Route::post('/',[\App\Http\Controllers\UserController::class, 'store'])->name('store');
    Route::get('/{service}/edit',[\App\Http\Controllers\UserController::class, 'edit'])->name('edit');
    Route::post('/bulk-destroy',[\App\Http\Controllers\UserController::class, 'Destroy'])->name('bulk-destroy');
    Route::post('/{service}',[\App\Http\Controllers\UserController::class, 'update'])->name('update');
    Route::delete('/{service}',[\App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');
    Route::resource('/ordertype', App\Http\Controllers\OrderTypeController::class);

    Route::resource('/orders', App\Http\Controllers\OrderController::class);
    Route::get('/create',[\App\Http\Controllers\OrderController::class, 'create'])->name('create');
    Route::post('/',[\App\Http\Controllers\OrderController::class, 'store'])->name('store');
    Route::get('/{service}/edit',[\App\Http\Controllers\OrderController::class, 'edit'])->name('edit');
    Route::post('/bulk-destroy',[\App\Http\Controllers\OrderController::class, 'Destroy'])->name('bulk-destroy');
    Route::post('/{service}',[\App\Http\Controllers\OrderController::class, 'update'])->name('update');
    Route::delete('/{service}',[\App\Http\Controllers\OrderController::class, 'destroy'])->name('destroy');

Route::resource('/orderis', App\Http\Controllers\OrderIController::class);
    Route::get('/create',[\App\Http\Controllers\OrderIController::class, 'create'])->name('create');
    Route::post('/',[\App\Http\Controllers\OrderIController::class, 'store'])->name('store');
    Route::get('/{service}/edit',[\App\Http\Controllers\OrderIController::class, 'edit'])->name('edit');
    Route::post('/bulk-destroy',[\App\Http\Controllers\OrderIController::class, 'Destroy'])->name('bulk-destroy');
    Route::post('/{service}',[\App\Http\Controllers\OrderIController::class, 'update'])->name('update');
    Route::delete('/{service}',[\App\Http\Controllers\OrderIController::class, 'destroy'])->name('destroy');

