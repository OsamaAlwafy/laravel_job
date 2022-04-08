<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userinterface;

use App\Http\Controllers\admin;

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





// Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

// Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
// Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
