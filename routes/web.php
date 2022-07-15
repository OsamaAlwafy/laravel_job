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
use App\Http\Controllers\company\Company;
use App\Http\Controllers\fultter\JobFultter;

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
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'dologin'])->name('login'); 
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/',[Userinterface::class,'showIndex']);
Route::get('/details_job/{id}',[Userinterface::class,'showDetails'])->name('details_job');
Route::get('/about',[Userinterface::class,'showAbout']);
Route::get('/contact',[Userinterface::class,'showContact']);
Route::get('/jobs',[Userinterface::class,'showJobs']); 
Route::get('/profile',[Userinterface::class,'showProfile'])->name('profile');
Route::get('/show_cv/{id}',[userData::class,'showCv'])->name('show_cv'); 
Route::get('fullter-jobs',[JobFultter::class,'index'])->name('fullter-jobs');  





Route::group(['middleware'=>'auth'],function(){
	Route::group(['middleware'=>'role:admin|super_admin'],function(){

        // Route::get('/dashboard',[DashboardController::class,'adminDash'])->name('dashboard');
        Route::get('/admin',[admin::class,'showadmin'])->name('admin');
        Route::post('/addJob',[admin::class,'addJob'])->name('addJob');
        Route::get('/showJob',[admin::class,'ShowJob'])->name('showJob');
        Route::post('/update_job/{id}',[admin::class,'UpdateJob'])->name('update_job');
        Route::get('/show_update_job/{id}',[admin::class,'showUpdateJob'])->name('show_update_job');
        Route::get('/delete_job/{id}',[admin::class,'deleteJob'])->name('delete_job');
        Route::get('/activity_job/{id}/{active}',[admin::class,'activityJob'])->name('activity_job');
        Route::get('/creat_company',[admin::class,'createCompany'])->name('creat_company');
        Route::post('/store_company',[admin::class,'storeCompany'])->name('storeCompany');
        Route::get('/delete_company/{id}',[admin::class,'deleteCompany'])->name('delete_company');
        Route::post('/update_company/{id}',[admin::class,'UpdateCompany'])->name('update_company');
        Route::get('/show_update_company/{id}',[admin::class,'showUpdateCompany'])->name('show_update_company');
        Route::get('/show_company',[admin::class,'showCompany'])->name('show_company');
        Route::get('/create_admin',[admin::class,'creat_admin'])->name('create_admin');
        Route::get('/activity_company/{id}/{active}',[admin::class,'activityCompany'])->name('activity_company');
    });
});




// show user profile
Route::group(['middleware'=>'auth'],function(){
	Route::group(['middleware'=>'role:client'],function(){
Route::get('/applying_job/{id}',[userData::class,'applyingJob'])->name('applying_job');

Route::get('/dashboard_user',[userData::class,'showData'])->name('dashboard_user');
Route::post('update_user_data/{id}',[userData::class,'updateUserData'])->name('update_user_data');
Route::get('/skill',[skill::class,'showSkill'])->name('show_skill');
Route::post('/add_skill',[skill::class,'storeSkill'])->name('add_skill'); 
Route::post('/update_skill/{id}',[skill::class,'updateSkill'])->name('update_skill'); 

Route::get('/edit_skill/{id}',[skill::class,'editSkill'])->name('edit_skill'); 
Route::get('/delete_skill/{id}',[skill::class,'deleteSkill'])->name('delete_skill'); 
Route::get('/activity_skill/{id}/{active}',[skill::class,'activitySkill'])->name('activity_skill'); 

Route::get('/edit_qualification/{id}',[qualification::class,'editqualification'])->name('edit_qualification'); 
Route::get('/delete_qualification/{id}',[qualification::class,'deletequalification'])->name('delete_qualification'); 
Route::get('/activity_qualification/{id}/{active}',[qualification::class,'activityqualification'])->name('activity_qualification'); 
Route::post('/update_qualification/{id}',[qualification::class,'updatequalification'])->name('update_qualification'); 


Route::get('/pre_work',[previous_work::class,'showPreWork'])->name('show_pre_work');
Route::post('/store_pre_work',[previous_work::class,'StorePreWork'])->name('store_pre_work');
Route::post('/update_pre_work/{id}',[previous_work::class,'updatePreWork'])->name('update_pre_work'); 

Route::get('/edit_pre_work/{id}',[previous_work::class,'editPreWork'])->name('edit_pre_work'); 
Route::get('/delete_pre_work/{id}',[previous_work::class,'deletePreWork'])->name('delete_pre_work'); 
Route::get('/activity_pre_work/{id}/{active}',[previous_work::class,'activityPreWork'])->name('activity_pre_work'); 


Route::get('/qualifications',[qualification::class,'showqualification'])->name('show_qualifications');
Route::post('/store_qualifications',[qualification::class,'storeQualification'])->name('store_qualifications');
Route::get('/experience',[experience::class,'showExperience'])->name('show_experience');
Route::post('/update_experience/{id}',[experience::class,'updateExperience'])->name('update_experience'); 
 
Route::get('/edit_experience/{id}',[experience::class,'editExperience'])->name('edit_experience'); 
Route::get('/delete_experience/{id}',[experience::class,'deleteExperience'])->name('delete_experience'); 
Route::get('/activity_experience/{id}/{active}',[experience::class,'activityExperience'])->name('activity_experience'); 
// Route::get('/show_cv/{id}',[userData::class,'showCv'])->name('show_cv'); 
Route::get('/show_job_applied',[userData::class,'showJobApplied'])->name('show_job_applied'); 
Route::get("/connection_data_user",[userData::class,'showDataConnection'])->name('connection_data_user');
Route::post("/connection_data_user",[userData::class,'storeDataConnection'])->name('connection_data_user');
Route::get("/connection_data_user_edit",[userData::class,'editDataConnection'])->name('connection_data_user_edit');




Route::post('/store_experience',[experience::class,'storeExperience'])->name('store_experience');
// Route::get('/login',[AuthController::class,'login'])->name('login');
// Route::get('/sign_up',[AuthController::class,'signup'])->name('sign_up');
// Route::post('/do_login',[AuthController::class,'dologin'])->name('do_login');
// Route::post('/register',[AuthController::class,'register'])->name('register');
});
});

Route::group(['middleware'=>'auth'],function(){
	Route::group(['middleware'=>'role:company'],function(){
Route::post('/about_company',[Company::class,'storeAbout'])->name('about_company');
Route::post('/update_account_company',[Company::class,'storeAbout'])->name('update_account_company');
Route::post('/update_logo_company',[Company::class,'updateLogo'])->name('update_logo_company');


Route::get("/dashboard_company",[Company::class,'indexDashboard'])->name('dashboard_company');
Route::post("/update_company_data/{id}",[Company::class,'updateCompanyData'])->name('update_company_data');

Route::get("/connection_company",[Company::class,'connectionCompany'])->name('connection_company');
Route::get("/securty_company",[Company::class,'securityCompany'])->name('securty_company');
Route::get("/service_company",[Company::class,'serviceCompany'])->name('service_company');
Route::post("/store_service",[Company::class,'storeService'])->name('store_service');
Route::post("/update_service/{id}",[Company::class,'updateService'])->name('update_service');
Route::get("/activity_service/{id}/{active}",[Company::class,'activityService'])->name('activity_service');
Route::get("/edit_service/{id}",[Company::class,'editService'])->name('edit_service');
// update data company 
Route::post("/update_company_data",[Company::class,'updateCompanyData'])->name('update_company_data');


Route::get("/show_job_company",[Company::class,'showJob'])->name('show_job_company');
Route::get("/edit_job_company/{id}",[Company::class,'editJob'])->name('edit_job_company');
Route::get("/delete_job_company/{id}",[Company::class,'deleteJob'])->name('delete_job_company');
Route::get("/activity_job_company/{id}/{active}",[Company::class,'activityJob'])->name('activity_job_company');
Route::get("/complete_accept_user/{job_id}/{user_id}",[Company::class,'acceptUser'])->name('complete_accept_user');


Route::get("/profile_company",[Company::class,'showProfileCompany'])->name('profile_company');




Route::post("/store_job_company",[Company::class,'storeJob'])->name('store_job_company');
Route::post("/update_job_company/{id}",[Company::class,'updateJob'])->name('update_job_company');

// Route::get("s_job_company",[Company::class,'storeJob'])->name('store_job_company');

Route::get("/home",[Company::class,'indexDashboard'])->name('home');


});
});



//  Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

// Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
