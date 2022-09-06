<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('employee-registration', [EmployeeController::class,'create'])->name('create.employee');

Route::post('store-employee', [EmployeeController::class,'store'])->name('store.employee');

Route::get('list-employee', [EmployeeController::class,'store'])->name('employee.list');
