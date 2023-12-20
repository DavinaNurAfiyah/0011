<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Davinar;
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

Route::get('/',  [Davinar::class,'create']) ;

Route::resource('isi', Davinar::class) ;
