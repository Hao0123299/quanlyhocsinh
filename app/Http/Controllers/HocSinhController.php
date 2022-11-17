<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocSinhController extends Controller
{
    public function index(){
        return view('hocSinh.danhSachHocSinh');
    }
    public function them_hoc_sinh(){
        return view('hocSinh.themHocSinh');
    }
}
