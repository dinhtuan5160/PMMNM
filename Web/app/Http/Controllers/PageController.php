<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\TheLoai;

class PageController extends Controller
{
    //
  
    public function getTrangChu(){
        $dts_moinhat = SanPham::orderBy('created_at', 'DESC')->where('trangthai',1)->get();
        $dts_pinkhung = SanPham::orderBy('dungluongpin', 'DESC')->where('trangthai',1)->get();

    	return view('viewer.page.trangchu',['dts_moinhat'=>$dts_moinhat,'dts_pinkhung'=>$dts_pinkhung]);
    }
}
