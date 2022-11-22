<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HocSinhController extends Controller
{
    public function index(){
        DB::table('student')->get();

        return view('hocSinh.danhSachHocSinh');
    }
    public function them_hoc_sinh(){
        return view('hocSinh.themHocSinh');
    }
    public function luu_thong_tin(Request $request){
        $data = array();
        $data['name_student'] = $request->name_student;
        $data['class'] = $request->class;
        $data['subjects'] = $request->subjects;
        $data['name_parent'] = $request->name_parent;
        $data['phone'] = $request->phone;
        $data['date'] = $request->date;

        DB::table('student')->insert($data);
        Session::put('message', 'Thêm sinh viên thành công');
        return Redirect::to('them-hoc-sinh');

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';

    }
}
