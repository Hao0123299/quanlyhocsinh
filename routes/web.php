<?php

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
//    tong quan
    Route::get('/', [App\Http\Controllers\TongQuanController::class, 'index']);
    Route::get('/tong-quan', [App\Http\Controllers\TongQuanController::class, 'index']);
//    môn học
    Route::get('/danh-sach-mon-hoc', [App\Http\Controllers\MonHocController::class, 'index']);
    Route::get('/them-mon-hoc', [App\Http\Controllers\MonHocController::class, 'them_mon_hoc']);
    Route::post('/luu-thong-tin-mon-hoc', [App\Http\Controllers\MonHocController::class, 'luu_thong_tin_mon_hoc']);
//    học sinh
    Route::get('/danh-sach-hoc-sinh', [App\Http\Controllers\HocSinhController::class, 'index']);
    Route::get('/them-hoc-sinh', [App\Http\Controllers\HocSinhController::class, 'them_hoc_sinh']);
    Route::post('/luu-thong-tin', [App\Http\Controllers\HocSinhController::class, 'luu_thong_tin']);
//    giáo viên
    Route::get('/danh-sach-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'index']);
    Route::get('/them-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'them_giao_vien']);
    Route::post('/luu-thong-tin-giao-vien', [App\Http\Controllers\GiaoVienController::class, 'luu_thong_tin_giao_vien']);
//    phân quyền
    Route::get('/danh-sach-quyen', [App\Http\Controllers\RoleController::class, 'index']);
    Route::get('/them-quyen', [App\Http\Controllers\RoleController::class, 'them_quyen']);
//    đăng ký thong tin giao vien
    Route::get('/dang-ky-tai-khoan', [App\Http\Controllers\DangKyController::class, 'index']);
    Route::get('/dang-nhap', [App\Http\Controllers\DangNhapController::class, 'index']);

