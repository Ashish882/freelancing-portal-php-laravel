<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController as admin;
use App\Http\Controllers\employee\DashboardController as employee;
use App\Http\Controllers\freelancer\DashboardController as freelancer;
use App\Http\Controllers\employee\addprojectController as addproject;
use App\Http\Controllers\employee\viewProjectController as viewproject;
use App\Http\Controllers\projectsController;
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
Route::get('addproject',[addproject::class,'create'])
                ->middleware('role:2');
Route::post('addproject', [addproject::class, 'addproject'])
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

Route::get('employee_dashboard/delete/{id}',[viewproject::class,'deleteproject'])
                ->middleware('role:2'); 

Route::get('employee_dashboard/view_proposal/{id}',[viewproject::class,'previewpropasal'])
                ->middleware('role:2'); 

///////////////////////////////////////   Employeee End     //////////////////////////////////////////////////////////////   

///////////////////////*  Public preview project   *//////////////////////////
Route::get('projects',[projectsController::class,'index']);
Route::get('view-project/{id}',[projectsController::class,'view_project']);
Route::get('apply_project/{id}',[projectsController::class,'apply_project'])->middleware('role:3');
Route::post('apply_project/{id}',[projectsController::class,'applyforproject'])->middleware('role:3');

////////////////////////////// * Free lancer *////////////////////////
Route::get('view_application',[freelancer::class,'view_application'])->middleware('role:3');
Route::get('project',[freelancer::class,'view_projects'])->middleware('role:3');
Route::get('profile',[freelancer::class,'view_profile'])->middleware('role:3');
Route::get('viewproject/{id}',[freelancer::class,'preview_projects'])->middleware('role:3');


require __DIR__.'/auth.php';
