<?php

use App\Http\Controller\Admin\SiswaController;
use App\Http\Controllers\Admin\PageController;
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
//     return view('welcome');
// });



Route::get('/', [App\Http\Controllers\Admin\PageController::class, 'index']);
Route::get('/datasiswa', [App\Http\Controllers\Admin\PageController::class, 'tampil']);
Route::get('/daftarsiswa', [App\Http\Controllers\Admin\PageController::class, 'siswa']);
Route::get('/daftarnilai', [App\Http\Controllers\Admin\PageController::class, 'nilai']);

Route::get('/coba-facade', [App\Http\Controllers\Admin\SiswaController::class, 'cobaFacade']);

Route::get('/satu', [App\Http\Controllers\CollectionController::class, 'collectionSatu']);
Route::get('/dua', [App\Http\Controllers\CollectionController::class, 'collectionDua']);
Route::get('/tiga', [App\Http\Controllers\CollectionController::class, 'collectionTiga']);
Route::get('/empat', [App\Http\Controllers\CollectionController::class, 'collectionEmpat']);
Route::get('/lima', [App\Http\Controllers\CollectionController::class, 'collectionLima']);
Route::get('/enam', [App\Http\Controllers\CollectionController::class, 'collectionEnam']);