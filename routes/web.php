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
use App\Http\Controllers\SettingsController;
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
Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');

Route::group(['middleware'=>'auth'],function(){
	Route::group(['middleware'=>'role:admin|super_admin'],function(){

        // Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');
        Route::get('/admin',[admin::class,'showadmin'])->name('admin');
        Route::post('/addJob',[admin::class,'addJob'])->name('addJob');
        Route::get('/creat_company',[admin::class,'createCompany'])->name('creat_company');
        Route::get('/create_admin',[admin::class,'creat_admin'])->name('create_admin');
    });
});


Route::get('/',[Userinterface::class,'showIndex']);
Route::get('/details',[Userinterface::class,'showDetails']);
Route::get('/about',[Userinterface::class,'showAbout']);
Route::get('/contact',[Userinterface::class,'showContact']);
Route::get('/jobs',[Userinterface::class,'showJobs']);
Route::get('/profile',[Userinterface::class,'showProfile'])->name('profile');

Route::get('/dataPerson',[userData::class,'showData']);
Route::get('/skill',[skill::class,'showSkill']);

Route::get('/pre_work',[previous_work::class,'showPreWork']);
Route::get('/qualifications',[qualification::class,'showqualification']);
Route::get('/experience',[experience::class,'showExperience']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/sign_up',[AuthController::class,'signup'])->name('sign_up');
Route::post('/do_login',[AuthController::class,'dologin'])->name('do_login');
Route::post('/register',[AuthController::class,'register'])->name('register');




//  Route::post('/do_login',[AuthController::class,'login'])->name('do_login');
Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
// Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
