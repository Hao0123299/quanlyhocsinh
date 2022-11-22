<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class GiaoVienController extends Controller
{
    public function index(){
        return view('giaoVien.danhSachGiaoVien');
    }
    public function them_giao_vien(){
        return view('giaoVien.themGiaoVien');
    }
    public function luu_thong_tin_giao_vien(Request $request){
        $data = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['cmnd_cccd'] = $request->cmnd_cccd;
        $data['address'] = $request->address;
        $data['img'] = $request->img;
        DB::table('teacher')->insert($data);
        Session::put('message', 'Thêm giáo viên thành công');
        return Redirect::to('them-giao-vien');

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';

    }
}
