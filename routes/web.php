<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Akuncontroller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ToDoController;


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

Route::view('/', 'tempalte.master');

Route::view('/home', 'template.master');

Route::get('/data-table', [Akuncontroller::class, 'index'])->name('indexAkun');
Route::get('/table', [Akuncontroller::class, 'create'])->name('createAkun');


// Route untuk uri /account
Route::get('/account', 
  [AccountController::class, 'index']
)->name('indexAccount');
Route::get('/account/create', 
  [AccountController::class, 'create']
)->name('createAccount');
Route::get('/account/show', 
  [AccountController::class, 'show']
)->name('showAccount');
