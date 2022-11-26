<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class MonHocController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        Return view('monHoc.danhSachMonHoc', ['subjects'=>$subjects]);
//        return view('monHoc.danhSachMonHoc');
    }
    public function them_mon_hoc(){
        return view('monHoc.themMonHoc');
    }
    public function luu_thong_tin_mon_hoc(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['class'] = $request->class;
        DB::table('subject')->insert($data);
        Session::put('message', 'Thêm môn học thành công thành công');
        return Redirect::to('them-mon-hoc');

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';

    }
}
