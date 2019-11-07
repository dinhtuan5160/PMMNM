<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dangnhap/','UserController@getDangNhapAdmin')->name('loginAdmin');
Route::post('admin/dangnhap','UserController@postDangNhapAdmin')->name('loginAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin')->name('logout');


//,'middleware'=>'adminLogin'
Route::get('loaisanpham/{id_theloai}','AjaxController@getLoaiSanPham'); 

Route::group(['prefix'=>'admin'],function(){	
	Route::group(['prefix'=>'theloai'],function(){
		// admin/theloai/danhsach
		Route::get('danhsach','TheLoaiController@getDanhSach')->name('quantri');

		Route::get('xoa/{id}','TheLoaiController@getXoa');

		Route::get('sua/{id}','TheLoaiController@getSua');
		Route::post('sua/{id}','TheLoaiController@postSua');

		Route::get('them','TheLoaiController@getThem');
		Route::post('them','TheLoaiController@postThem');
	});

	

	Route::group(['prefix'=>'sanpham'],function(){
		// admin/sanpham/danhsach
		Route::get('danhsach','SanPhamController@getDanhSach');

		Route::get('sua/{id}','SanPhamController@getSua');
		Route::post('sua/{id}','SanPhamController@postSua');

		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@postThem');

		Route::get('xoa/{id}','SanPhamController@getXoa');	
	});

	Route::group(['prefix'=>'hoadon'],function(){
		// admin/sanpham/danhsach
		Route::get('danhsach','HoaDonController@getDanhSach')->name('quan-tri');

		// Route::get('sua/{id}','HoaDonController@getSua');
		// Route::post('sua/{id}','HoaDonController@postSua');

		Route::get('xoa/{id}','HoaDonController@getXoa');	
	});


	Route::group(['prefix'=>'comment'],function(){
		// admin/sanpham/danhsach

		Route::get('xoa/{id}/{idSanPham}','CommentController@getXoa');	
	});
	// Route::group(['prefix'=>'ajax'],function(){
	// 		Route::get('ajax/loaisanpham/{id_theloai}','AjaxController@getLoaiSanPham'); 	
	// });

	Route::group(['prefix'=>'user'],function(){ 
		// admin/user/danhsach
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');


		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');

		Route::get('xoa/{id}','UserController@getXoa');	
	});

	Route::group(['prefix'=>'slide'],function(){
		// admin/slide/danhsach
		Route::get('danhsach','SlideController@getDanhSach');
		
		Route::get('sua/{id}','SlideController@getSua');
		Route::post('sua/{id}','SlideController@postSua');


		Route::get('them','SlideController@getThem');
		Route::post('them','SlideController@postThem');

		Route::get('xoa/{id}','SlideController@getXoa');	
	});
	Route::group(['prefix'=>'ram'],function(){
		// admin/ram/danhsach
		Route::get('danhsach','RamController@getDanhSach');
		
		Route::get('sua/{id}','RamController@getSua');
		Route::post('sua/{id}','RamController@postSua');


		Route::get('them','RamController@getThem');
		Route::post('them','RamController@postThem');

		Route::get('xoa/{id}','RamController@getXoa');	
	});

	Route::group(['prefix'=>'hedieuhanh'],function(){
		// admin/ram/danhsach
		Route::get('danhsach','HeDieuHanhController@getDanhSach');
		
		Route::get('sua/{id}','HeDieuHanhController@getSua');
		Route::post('sua/{id}','HeDieuHanhController@postSua');


		Route::get('them','HeDieuHanhController@getThem');
		Route::post('them','HeDieuHanhController@postThem');

		Route::get('xoa/{id}','HeDieuHanhController@getXoa');	
	});

	Route::group(['prefix'=>'mausacsanpham'],function(){
		// admin/ram/danhsach
		Route::get('danhsach','MauSacSanPhamController@getDanhSach');
		
		Route::get('sua/{id}','MauSacSanPhamController@getSua');
		Route::post('sua/{id}','MauSacSanPhamController@postSua');


		Route::get('them','MauSacSanPhamController@getThem');
		Route::post('them','MauSacSanPhamController@postThem');

		Route::get('xoa/{id}','MauSacSanPhamController@getXoa');	
	});
});


Route::get('trangchu','PageController@getTrangChu')->name('trang-chu');

Route::get('theloai/{id}','TheLoaiController@getViewerDanhSach');

Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','CartController@getAddCart')->name('add-cart');

	Route::get('delete/{id}','CartController@getDeleteCart')->name('delete-cart');

	Route::get('show','CartController@getShowCart')->name('show-cart');

	Route::get('dathang','CartController@getDatHang')->name('dat-hang');
});
