<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangKyController extends Controller
{
    public function index(){
        return view('dangKy.dangKyTaiKhoan');
    }
}
