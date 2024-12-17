<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhaccController;
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

Route::get('/', function () {
    return view('welcome');
});
#nhaccnhacc - Model
Route::get('/nhacc',[NhaccController::class,'index'])->name('nhacc.index');
Route::get('/nhacc/detail/{nvkMaNCC}',[NhaccController::class,'getnhaccById'])->name('nhacc.detail');
# sửa thông tin môn học
Route::get('/nhacc/edit/{nhacc}',[NhaccController::class,'edit'])->name('nhacc.edit');
Route::post('/nhacc/edit',[NhaccController::class,'editSubmit'])->name('nhacc.editSubmit');
## Xóa thông tin môn học
Route::get('/nhacc/delete/{nhacc}',[NhaccController::class,'delete'])->name('nhacc.delete');
# thêm mới
Route::get('/nhacc/create',[NhaccController::class,'create'])->name('nhacc.create');
Route::post('/nhacc/create',[NhaccController::class,'createSubmit'])->name('nhacc.createSubmit');
