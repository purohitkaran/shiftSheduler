<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\EmployeeController;
Route::resource('employee', EmployeeController::class);

use App\Http\Controllers\ShiftController;
Route::resource('shift', ShiftController::class);

use App\Http\Controllers\RoleController;
Route::resource('role', RoleController::class);

use App\Http\Controllers\AllocateController;
Route::resource('allocate', AllocateController::class);

Route::get('calendar','App\Http\Controllers\ShiftController@showcalendar');
Route::get('shiftemployee','App\Http\Controllers\ShiftController@empShifts');

Route::get('availableemp','App\Http\Controllers\EmployeeController@available');
