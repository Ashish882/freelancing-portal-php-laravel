<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController as admin;
use App\Http\Controllers\employee\DashboardController as employee;
use App\Http\Controllers\freelancer\DashboardController as freelancer;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('admin_dashboard',[admin::class,'index']);
Route::get('employee_dashboard',[employee::class,'index']);
Route::get('freelancer_dashboard',[freelancer::class,'index']);

require __DIR__.'/auth.php';
