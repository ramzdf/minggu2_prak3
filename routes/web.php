<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [HomeController::class,'index']);

Route::prefix('ProgramStudi')->group(function () {
    Route::get('/manajemen-informatika', [ProgramStudiController::class,'manajemenInformatika']);
    Route::get('/teknik-informatika', [ProgramStudiController::class,'teknikInformatika']);
});


Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [SaranaController::class,'perkantoran']);
    Route::get('/laboratorium', [SaranaController::class,'laboratorium']);
    Route::get('/kelas', [SaranaController::class,'kelas']);
    Route::get('/lainnya', [SaranaController::class,'lainnya']);

});

Route::get('/about', [AboutController::class,'about']);

Route::get('/comment/{nama}/{pesan}', [CommentController::class,'comment']);