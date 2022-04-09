<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userinterface;

use App\Http\Controllers\admin;

use App\Http\Controllers\userProfile\userData;
use App\Http\Controllers\userProfile\skill;
use App\Http\Controllers\userProfile\previous_work;
use App\Http\Controllers\userProfile\qualification;
use App\Http\Controllers\userProfile\experience;
use App\Http\Controllers\Authentication\AuthController;
// use App\Http\Controllers\userProfile\previous_work;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Userinterface::class,'showIndex']);
Route::get('/details',[Userinterface::class,'showDetails']);
Route::get('/about',[Userinterface::class,'showAbout']);
Route::get('/contact',[Userinterface::class,'showContact']);
Route::get('/jobs',[Userinterface::class,'showJobs']);
Route::get('/profile',[Userinterface::class,'showProfile']);
Route::get('/admin',[admin::class,'showadmin']);
Route::get('/creat_company',[admin::class,'createCompany']);
Route::get('/dataPerson',[userData::class,'showData']);
Route::get('/skill',[skill::class,'showSkill']);
Route::get('/pre_work',[previous_work::class,'showPreWork']);
Route::get('/qualifications',[qualification::class,'showqualification']);
Route::get('/experience',[experience::class,'showExperience']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/sign_up',[AuthController::class,'signup'])->name('sign_up');




 Route::post('/do_login',[AuthController::class,'login'])->name('do_login');
Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
// Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
