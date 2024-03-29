<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\HoaDon;
use App\HoaDonChiTiet;
use App\SanPham;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    //
    public function getAddCart($id){
        $sp = SanPham::find($id);
        if($sp->gia_sale=="")
            Cart::add(['id' => $id, 'name' => $sp->ten, 'qty' => 1, 'price' => $sp->gia, 'weight' => 550, 'options' => ['img' => $sp->hinhanh]]);
        else
            Cart::add(['id' => $id, 'name' => $sp->ten, 'qty' => 1, 'price' => $sp->gia_sale, 'weight' => 550, 'options' => ['img' => $sp->hinhanh]]);

            return redirect()->back();
        
    }

    public function getDeleteCart($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function getShowCart(){

        $data = Cart::content();
        $total = Cart::total();
        return view('viewer.giohang.muahang',['data'=>$data,'total'=>$total]);
    }

    public function getDatHang(){
        $data = Cart::content();
        $total = Cart::total();
        return view('viewer.giohang.dathang',['data'=>$data,'total'=>$total]);
    }

    public function postDatHang(Request $request){
        $total = Cart::total();
        $cart = Cart::content();
        $this->validate($request,[
            'hoten'=>'required|min:3|max:100|',
            'sdt'=>'required',
            'diachi'=>'required'
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên thể loại',
            'ten.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 kí tự',
            'ten.max'=>'Tên thể loại phải có độ dài từ 3 đến 100 kí tự',
            'sdt.required'=>'Bạn chưa nhập số điện thoại',
            'diachi.required'=>'Bạn chưa nhập địa chỉ',
        ]);
        $hoadon = new HoaDon;
        $hoadon->ngaymua = date('y-m-d');
        $hoadon->tongtien = $total;
        $hoadon->trangthai = 0;
        $hoadon->id_user = Auth::user()->id;
        $hoadon->ten =$request->hoten;
        $hoadon->sdt = $request->sdt;
        $hoadon->dia_chi = $request->diachi;
        $hoadon->ghi_chu  = $request->ghichu;
        
        $hoadon->save();
        foreach ($cart as $key => $value) {
    		$hoadonchitiet = new HoaDonChiTiet;
	    	$hoadonchitiet->id_hoadon = $hoadon->id;
	    	$hoadonchitiet->id_sanpham = $value->id;
	    	$hoadonchitiet->soluongmua= $value->qty;
	    	$hoadonchitiet->save();
        }
        Cart::destroy();
        return redirect()->back()->with('thongbao','Bạn đã đặt hàng thành công');

    }

    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }

    public function getDanhSachHD(){
        $hoadon = HoaDon::all();
        return view('admin.hoadon.danhsach',compact('hoadon'));
    }

    public function getXoa($id){
        $hoadon = HoaDon::find($id);
        $hoadon->trangthai = 1;
        $hoadon->save();
        return back()->with('thongbao','Thanh toán thành công');
    }
}
