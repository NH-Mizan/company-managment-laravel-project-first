<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('test');
// });


Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/serviecs', [FrontEndController::class, 'serviecs'])->name('serviecs');

