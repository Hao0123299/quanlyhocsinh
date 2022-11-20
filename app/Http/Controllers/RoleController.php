<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view('role.danhSachRole');
    }
    public function them_quyen(){
        return view('role.themRole');
    }
}
