<?php


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\Auth\VerificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// normal user without registration
Route::get('/',[CareerController::class,'home']);
Route::get('/job-vacancy/{id}',[CareerController::class,'jobview']);
Route::get('/contact',[CareerController::class,'contact']);
Route::post('/contact-us',[CareerController::class,'contactus']);
Route::get('/about_us',[CareerController::class,'about']);
Route::get('/career-opportunities',[CareerController::class,'career']);
Route::get('/intern-opportunities',[CareerController::class,'intern']);
Route::get('/training-opportunities',[CareerController::class,'training']);
Route::get('/applications',[CareerController::class,'application']);
Route::get('/reg',[CareerController::class,'reg']);
Route::get('/gallery-view',[CareerController::class,'gallery']);




// registered user can acess
 Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user'], function () {

    Route::get('/contact',[HomeController::class,'contact']);
    Route::post('/contact',[CareerController::class,'contactus']);
    Route::get('/gallery',[HomeController::class,'gallery']);
    
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/youth-employment', [HomeController::class, 'register']);
    Route::post('/job-placement', [HomeController::class, 'store']);
    Route::get('/university-placement', [HomeController::class, 'university']);
    Route::post('/university-placement', [HomeController::class, 'uni']);
    Route::get('/registered-group', [HomeController::class, 'womanreg']);
    Route::post('/registered-group', [HomeController::class, 'storewoman']);
});


// Admin section .only admin and super admin
Route::group(['middleware' => ['auth', 'verified',AdminMiddleware::class]], function () {
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/opportunities', [AdminController::class,'create']);
    Route::post('/opportunities', [AdminController::class,'store']);
    Route::get('/view-opportunities', [AdminController::class,'view']);
    Route::get('/contact-us', [AdminController::class,'contact']);

    
    Route::get('/gallery', [AdminController::class,'galleryview']);
    Route::get('/gallery-add', [AdminController::class,'galleryadd']);
    Route::post('/gallery', [AdminController::class,'gallery']);
    
    Route::get('/add-users', [AdminController::class,'adduser']);
    Route::get('/users', [AdminController::class,'viewuser']);
    Route::post('/users', [AdminController::class,'userstore']);
    Route::get('/user-role/{id}', [AdminController::class,'userview']);
    Route::put('/user-update/{id}', [AdminController::class,'usersupdate']);
    Route::get('/profile-view/{id}', [AdminController::class,'profile']);
    Route::get('/group-view/{id}', [AdminController::class,'groupview']);
    Route::get('/applicant-details/{id}', [AdminController::class,'university']);
   
    // Report links
    Route::get('/job-seekers-report', [AdminController::class,'employment']);
    Route::get('/youth-report', [AdminController::class,'report']);
    Route::get('/pwd-report', [AdminController::class,'pwd']);
    Route::get('/woman-group-report', [AdminController::class,'woman']);
    Route::get('/postgraduate-report', [AdminController::class,'postg']);
    Route::get('/undergraduate-report', [AdminController::class,'underg']);
    Route::get('/college-report', [AdminController::class,'college']);
    Route::get('/vocational-report', [AdminController::class,'vocational']);
    Route::get('/KCSE-holders-report', [AdminController::class,'kcse']);
    Route::get('/KCPE-holders-report', [AdminController::class,'KCPE']);
    Route::get('/university-placement-program', [AdminController::class,'uni']);
});
// Admin section ends here


Auth::routes(['verify' => true]);