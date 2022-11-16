<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Akuncontroller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;

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

// Route::get('/student', [SiswaController::class, 'index'])->name('studentIndex');
// Route::get('/student/create', [SiswaController::class, 'create'])->name('studentCreate');
// Route::post('/student', [SiswaController::class, 'store'])->name('studentStore');
// Route::get('/student/(id)', [SiswaController::class, 'show'])->name('studentShow');
// Route::get('/student/(id)/edit', [SiswaController::class, 'edit'])->name('studentEdit');
// Route::put('/student/(id)', [SiswaController::class, 'update'])->name('studentUpdate');
// Route::delete('/student/(id)', [SiswaController::class, 'destory'])->name('studentDestory');

// Route::controller(SiswaController::class)->group(function () {
//   Route::get('/student', 'index')->name('studentIndex');
//   Route::get('/student/create', 'create')->name('studentCreate');
//   Route::post('/student', 'store')->name('studentStore');
//   Route::get('/student/(id)', 'show')->name('studentShow');
//   Route::get('/student/(id)/edit', 'edit')->name('studentEdit');
//   Route::put('/student/(id)', 'update')->name('studentUpdate');
//   Route::delete('/student/(id)', 'destory')->name('studentDestory');
//});

Route::resource('student', SiswaController::class);

Route::resource('class', KelasController::class);