<?php

use App\Http\Controllers\CommonController;
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
Route::get('/',[CommonController::class,'index'])->name('index');
Route::get('/about',[CommonController::class,'about'])->name('about');
Route::get('/service',[CommonController::class,'service'])->name('service');
Route::get('/detail',[CommonController::class,'detail'])->name('detail');
Route::get('contact',[CommonController::class,'contact'])->name('contact');
// Route::get('/', function () {
//     return view('about');
// });