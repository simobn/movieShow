<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/create', [HomeController::class,'create']);
Route::post('/create', [HomeController::class,'store'])->name('store.upcoming');


Route::get('file-upload', [HomeController::class, 'createnew'])->name('files.index');
Route::post('file-upload/upload-large-files', [HomeController::class, 'uploadLargeFiles'])->name('files.upload.large');
