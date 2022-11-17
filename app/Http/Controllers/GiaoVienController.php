<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoVienController extends Controller
{
    public function index(){
        return view('giaoVien.danhSachGiaoVien');
    }
    public function them_giao_vien(){
        return view('giaoVien.danhSachGiaoVien');
    }
}
