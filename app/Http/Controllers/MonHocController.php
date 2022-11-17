<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonHocController extends Controller
{
    public function index(){
        return view('monHoc.danhSachMonHoc');
    }
    public function them_mon_hoc(){
        return view('monHoc.themMonHoc');
    }
}
