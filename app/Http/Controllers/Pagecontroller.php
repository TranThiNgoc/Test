<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }
    public function getLoaiSp(){
    	return view('page.loai_sanpham');
    }
}
