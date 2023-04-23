<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index',[IndexController::class ,'index']);
Route::put('settings/{setting}',[SettingController::class,'update'])->name('dashboard.settings.update');
Route::get('settings',[SettingController::class,'index'])->name('dashboard.settings.index');

