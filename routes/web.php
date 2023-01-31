<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresensiSiswaController;
use App\Http\Controllers\PresensiGuruController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TingkatanController;
use App\Http\Controllers\JurusanController;
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

Route::get('/dashboard', [DashboardController::class, 'index01']);

Route::get('presensisiswa', [PresensiSiswaController::class, 'index3']);
Route::get('presensisiswa/search', [PresensiSiswaController::class, 'searchpresensisiswa']);
Route::get('presensisiswa/create', [PresensiSiswaController::class, 'createpresensisiswa']);
Route::post('presensisiswa', [PresensiSiswaController::class, 'storepresensisiswa']);
Route::get('presensisiswa/{id}/edit', [PresensiSiswaController::class, 'editpresensisiswa']);
Route::put('presensisiswa/{id}', [PresensiSiswaController::class, 'updatepresensisiswa']);
Route::delete('presensisiswa/{id}', [PresensiSiswaController::class, 'destroypresensisiswa']);

Route::get('presensiguru', [PresensiGuruController::class, 'index2']);
Route::get('presensiguru/create', [PresensiGuruController::class, 'createpresensiguru']);
Route::post('presensiguru', [PresensiGuruController::class, 'storepresensiguru']);
Route::get('presensiguru/{id}/edit', [PresensiGuruController::class, 'editpresensiguru']);
Route::put('presensiguru/{id}', [PresensiGuruController::class, 'updatepresensiguru']);
Route::delete('presensiguru/{id}', [PresensiGuruController::class, 'destroypresensiguru']);

Route::get('guru', [GuruController::class, 'index']);
Route::get('guru/search', [GuruController::class, 'searchguru']);
Route::get('guru/create', [GuruController::class, 'createguru']);
Route::post('guru', [GuruController::class, 'storeguru']);
Route::get('guru/{id}/edit', [GuruController::class, 'editguru']);
Route::put('guru/{id}', [GuruController::class, 'updateguru']);
Route::delete('guru/{id}', [GuruController::class, 'destroyguru']);

Route::get('siswa', [SiswaController::class, 'index1']);
Route::get('siswa/search', [SiswaController::class, 'searchsiswa']);
Route::get('siswa/create', [SiswaController::class, 'createsiswa']);
Route::post('siswa', [SiswaController::class, 'storesiswa']);
Route::get('siswa/{id}/edit', [SiswaController::class, 'editsiswa']);
Route::put('siswa/{id}', [SiswaController::class, 'updatesiswa']);
Route::delete('siswa/{id}', [SiswaController::class, 'destroysiswa']);

Route::get('tingkatan', [TingkatanController::class, 'index5']);
Route::get('tingkatan/create', [TingkatanController::class, 'createtingkatan']);
Route::post('tingkatan', [TingkatanController::class, 'storetingkatan']);
Route::get('tingkatan/{id}/edit', [TingkatanController::class, 'edittingkatan']);
Route::put('tingkatan/{id}', [TingkatanController::class, 'updatetingkatan']);
Route::delete('tingkatan/{id}', [TingkatanController::class, 'destroytingkatan']);

Route::get('jurusan', [JurusanController::class, 'index4']);
Route::get('jurusan/create', [JurusanController::class, 'createjurusan']);
Route::post('jurusan', [JurusanController::class, 'storejurusan']);
Route::get('jurusan/{id}/edit', [JurusanController::class, 'editjurusan']);
Route::put('jurusan/{id}', [JurusanController::class, 'updatejurusan']);
Route::delete('jurusan/{id}', [JurusanController::class, 'destroyjurusan']);