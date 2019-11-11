<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\SanPham;
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

    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }
}
