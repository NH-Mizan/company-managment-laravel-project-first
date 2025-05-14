<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('test');
// });


Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/serviecs', [FrontEndController::class, 'serviecs'])->name('serviecs');
Route::get('/gallery', [FrontEndController::class, 'photogallery'])->name('photogallery');
Route::get('/videogallery', [FrontEndController::class, 'videogallery'])->name('videogallery');


// Admin Panel 

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/admin/generlsetting/manage', [GeneralSettingController::class, 'index'])->name('generalsetting.index');
Route::get('/admin/generlsetting/create', [GeneralSettingController::class, 'create'])->name('generalsetting.create');

Route::post('/admin/generlsetting/store', [GeneralSettingController::class, 'store'])->name('generalsetting.store');




