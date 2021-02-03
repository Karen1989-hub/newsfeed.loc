<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdvertisingController;
use App\Http\Controllers\AboutUsController;

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

Route::get('/', [FrontController::class,'getHomePage'])->name('home');
Route::get('/karen', function () {return view('welcome');});
Route::get('/singel/{id}', [FrontController::class,'getSingelPage'])->name('getSingelPage');
Route::get('/allNews/{firstCategory}/{page?}',[FrontController::class,'getAllNews'])->name('getAllNews');
Route::get('/aboutUs',[FrontController::class,'aboutUs'])->name('aboutUs');
Route::fallback(function (){return view('errors.404');});

//check admin user
Route::get('/admin',function (){return view('adminPages.adminLogin');});
Route::post('/admin/checkAdmin',[AdminLoginController::class,'checkAdmin'])->name('checkAdmin');
Route::get('/signOut',[AdminLoginController::class,'signOut'])->name('signOut');

//admin -> home page
Route::prefix("/admin")->group(function(){
    Route::get('/getRunningLine',[AdminPagesController::class,'getRunningLine'])->name('getRunningLine');
    Route::get('/getSlider',[AdminPagesController::class,'getSlider'])->name('getSlider');
    Route::get('/getNews',[AdminPagesController::class,'getNews'])->name('getNews');
    Route::post("/setNews",[NewsController::class,'setNews'])->name('setNews');
    Route::get("/getSponsor",[AdminPagesController::class,'getSponsor'])->name('getSponsor');
    Route::post("/setSponsor",[AdvertisingController::class,'setSponsor'])->name('setSponsor');
    Route::get("/getDeleteNewsPage",[AdminPagesController::class,'getDeleteNewsPage'])->name('getDeleteNewsPage');
    Route::get("/getDeleteNewsCategory",[NewsController::class,'getDeleteNewsCategory'])->name('getDeleteNewsCategory');
    Route::get("/deleteNews/{id}",[NewsController::class,"deleteNews"])->name('deleteNews');
    Route::get("/getDeleteSponsorPage",[AdminPagesController::class,"getDeleteSponsorPage"])->name('getDeleteSponsorPage');
    Route::get("/deleteSponsor/{id}",[AdvertisingController::class,"deleteSponsor"])->name('deleteSponsor');
    Route::get("/getAboutUsPage",[AdminPagesController::class,"getAboutUsPage"])->name('getAboutUsPage');
    Route::post("/updateAboutUsText",[AboutUsController::class,"updateAboutUsText"])->name('updateAboutUsText');

});




