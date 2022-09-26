<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\OCRController;
use App\Http\Controllers\StarPatternController;
use App\Http\Controllers\BoxPatternController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::GET('/', [QRCodeController::class,'index' ])->name('view-qrcode');
Route::POST('generateQR', [QRCodeController::class,'generateQR' ])->name('generate-qrcode');
Route::GET('/ocrReader', [OCRController::class,'index' ])->name('ocr-reader');
Route::POST('/fileReader', [OCRController::class,'fileReader' ])->name('file-reader');
Route::GET('/starPattern', [StarPatternController::class,'index' ])->name('star-pattern');
Route::POST('/generateStarPattern', [StarPatternController::class,'generateStarPattern' ])->name('generate-star-pattern');
Route::GET('/boxPattern', [BoxPatternController::class,'index' ])->name('box-pattern');
