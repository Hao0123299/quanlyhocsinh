<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongQuanController extends Controller
{
    public function index(){
        return view('tongQuan.index');
    }
}
