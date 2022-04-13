<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userinterface;

use App\Http\Controllers\admin;
use App\Http\Controllers\companyController;
use App\Http\Controllers\job\jobController;
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
       
        Route::post('/addJob',[jobController::class,'storeJob'])->name('addJob');
        Route::get('/edit_job/{job_id}',[jobController::class,'editJob'])->name('edit_job');
        Route::get('/list_Job',[jobController::class,'listJob'])->name('list_Job');
        Route::post('/update_job/{id}',[jobController::class,'updateJob'])->name('update_job');
        Route::post('/toggle_job/{id}',[jobController::class,'toggleJob'])->name('toggle_job');


        Route::get('/creat_company',[companyController::class,'createCompany'])->name('creat_company');
       Route::post('/store_company',[companyController::class,'storeCompany'])->name('store_company');
        Route::get('/list_company',[companyController::class,'listCompany'])->name('list_company');
        Route::get('/edit_company/{cat_id}',[companyController::class,'editCompany'])->name('edit_company');
        Route::post('/update_company/{cat_id}',[companyController::class,'updateCompany'])->name('update_company');
        Route::get('/toggle_company/{cat_id}',[companyController::class,'toggleCompany'])->name('toggle_company');
        Route::get('/create_admin',[admin::class,'creat_admin'])->name('create_admin');
    });
});

//Route::post('/store_company',[companyController::class,'storeCompany'])->name('store_company');
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
