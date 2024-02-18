<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ResumeController::class, 'index'])->name('home');
Route::post('/', [ResumeController::class, 'index']);
Route::get('/create', [ResumeController::class, 'create'])->name('create');
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);