@extends('viewer.layout.index')
@section('title')
  <title>Đặt mua hàng</title>
@endsection
@section('content')







<!--breadcrumbs area start-->
<div class="breadcrumbs_area mt-45">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--Checkout page section-->
    <div class="Checkout_section mt-45">
       <div class="container">
           
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Địa chỉ giao hàng</h3>
                            <div class="row">

                                <div class="col-10 mb-20">
                                    <label>Họ và tên <span>*</span></label>
                                    <input type="text">    
                                </div>
                                
                                <div class="col-10 mb-20">
                                    <label>Email<span>*</span></label>
                                    <input type="text">     
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Số điện thoại<span>*</span></label>
                                    <input type="text"> 

                                </div> 
                                 <div class="col-lg-10 mb-20">
                                    <label>Địa chỉ nhận hàng<span>*</span></label>
                                      <input type="text"> 

                                </div> 
                                
                                
                                <div class="col-12">
                                    <div class="order-notes">
                                         <label for="order_note">Ghi chú</label>
                                        <textarea id="order_note" placeholder="Bạn có thể ghi chú thêm"></textarea>
                                    </div>    
                                </div>     	    	    	    	    	    	    
                            </div>
                            <button type="button" class="btn btn-success" style="margin-left:550px;margin-top:50px;">Đặt hàng</button>
                        </form>    
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">    
                            <h3>Sản phẩm đặt mua</h3> 
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $dt)
                                        <tr>
                                            <td>{{$dt->name}} <strong> × {{$dt->qty}}</strong></td>
                                            <td>{{number_format($dt->price * $dt->qty)}}<sup>đ</sup></td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="order_total">
                                            <th>Tổng thanh toán</th>
                                            <td><strong>{{$total}}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>     
                            </div>
                            
                        </form>         
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->
@endsection