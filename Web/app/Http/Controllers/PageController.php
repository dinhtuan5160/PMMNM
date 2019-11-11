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

    public function getChiTiet($id){

        $sanpham = SanPham::find($id);

        $splqs = SanPham::where('id_theloai',$sanpham->id_theloai)->where('trangthai',1)->get();
        return view('viewer.page.chitiet',['sanpham'=>$sanpham,'splqs'=>$splqs]);
    }
}

?>