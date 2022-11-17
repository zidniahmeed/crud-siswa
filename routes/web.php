<?php

use App\Http\Controllers\SiswaController;
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

// Route::get('/', function () {
//     return view('siswa.index');
// });
Route::get('/',[SiswaController::class, 'index'])->name('siswa');
Route::get('/createdata',[SiswaController::class, 'create']);
Route::post('/createdata',[SiswaController::class, 'store']);

Route::get('/editsiswa/{id}',[SiswaController::class, 'show']);
Route::post('/editsiswa/{id}',[SiswaController::class, 'update']);

Route::get('/deletesiswa/{id}',[SiswaController::class, 'destroy']);
