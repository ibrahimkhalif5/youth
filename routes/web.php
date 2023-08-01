<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;

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
Auth::routes();

// Frontend section start
Route::get('/',[CareerController::class,'home']);
Route::get('/job-vacancy/{id}',[CareerController::class,'jobview']);
Route::get('/contact',[CareerController::class,'contact']);
Route::post('/contact-us',[CareerController::class,'contactus']);
Route::get('/about_us',[CareerController::class,'about']);
Route::get('/career-opportunities',[CareerController::class,'career']);
Route::get('/intern-opportunities',[CareerController::class,'intern']);
Route::get('/training-opportunities',[CareerController::class,'training']);

// Youth registration
Route::get('/youth-employment',[CareerController::class,'register']);
Route::post('/employment',[CareerController::class,'store']);

// university
Route::get('/university-placement',[CareerController::class,'university']);
Route::post('/university-placement',[CareerController::class,'uni']);

// Woman group
Route::get('/registered-group',[CareerController::class,'womanreg']);
Route::post('/registered-group',[CareerController::class,'storewoman']);

Route::get('/reg',[CareerController::class,'reg']);

Route::get('/gallery-view',[CareerController::class,'gallery']);



// Admin section start here
Route::middleware(['auth'])->group(function () {
    // Backend start here

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