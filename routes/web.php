<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController as admin;
use App\Http\Controllers\employee\DashboardController as employee;
use App\Http\Controllers\freelancer\DashboardController as freelancer;
use App\Http\Controllers\employee\addprojectController as addproject;
use App\Http\Controllers\employee\viewProjectController as viewproject;
use App\Http\Controllers\session;

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


Route::get('admin_dashboard', [admin::class ,'index'])
                ->middleware('role:1');

Route::get('employee_dashboard', [employee::class ,'index'])
                ->middleware('role:2');

Route::get('freelancer_dashboard',[freelancer::class,'index'])
                ->middleware('role:3');       
////////////////////////////////  Employeee  ////////////////////////////////////////////////////////////
Route::get('employee_dashboard/addproject',[addproject::class,'create'])
                ->middleware('role:2');
Route::post('employee_dashboard/addproject', [addproject::class, 'addproject'])
                ->middleware('role:2');

                     /*View project*/

Route::get('employee_dashboard/viewproject',[viewproject::class,'index'])
                ->middleware('role:2');


                         /*Edit project*/
Route::get('employee_dashboard/edit/{id}',[viewproject::class,'show'])
                ->middleware('role:2'); 

Route::post('employee_dashboard/edit/{id}',[viewproject::class,'editproject'])
                ->middleware('role:2'); 

Route::post('employee_dashboard/delete/{id}',[viewproject::class,'deleteproject'])
                ->middleware('role:2'); 

///////////////////////////////    Employeee End   ////////////////////////////////////////////////////////////   


Route::get('session/get', [session::class, 'getSessionData']);
Route::get('session/set', [session::class, 'storeSessionData']);
Route::get('session/remove', [session::class, 'deleteSessionData']);



require __DIR__.'/auth.php';
