<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\ProductsController;



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



Route::get('/admin/aboutsetting/manage', [AboutSettingController::class, 'index'])->name('aboutsetting.index');

Route::get('/admin/aboutsetting/create', [AboutSettingController::class, 'create'])->name('aboutsetting.create');

Route::post('/admin/aboutsetting/store', [AboutSettingController::class, 'store'])->name('aboutsetting.store');

Route::get('/admin/aboutsetting/delete/{id}', [AboutSettingController::class,'delete'])->name('aboutsetting.delete');

Route::get('/admin/about/edit/{id}', [AboutSettingController::class, 'edit'])->name('about.edit');

Route::post('/admin/about/update', [AboutSettingController::class, 'update'])->name('about.update');




Route::get('/admin/products/manage', [ProductsController::class, 'index'])->name('products.index');

Route::get('/admin/products/create', [ProductsController::class, 'create'])->name('products.create');

Route::post('/admin/products/store', [ProductsController::class, 'store'])->name('products.store');
// web.php
Route::get('/admin/products/destroy/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/admin/products/edite/{id}', [ProductsController::class, 'edite'])->name('products.edite');
Route::post('/admin/products/update', [ProductsController::class, 'update'])->name('products.update');
Route::post('admin/products/active', [ProductsController::class, 'active'])->name('products.active');
Route::post('admin/products/inactive', [ProductsController::class, 'inactive'])->name('products.inactive');

