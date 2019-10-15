<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function getDanhSach(){
    	$user= User::all();
    	return view('admin.user.danhsach',['user'=>$user]);
    }
    
    public function getThem(){
    	return view('admin.user.them');
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    			'name'=>'required|min:3|max:100',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:32',
                'passwordAgain'=>'required|same:password',
                'diachi'=>'required',
                'phone'=>'required|numeric'

	    	],
	    	[
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
	    		'name.required'=>'Bạn chưa nhập họ tên',
	    		'name.min'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
	    		'name.max'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
                'password.min'=>'Mật khẩu phải có độ dài từ 3 kí tự',
                'password.max'=>'Mật khẩu chỉ có tối đa 32 kí tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu không khớp',
                'diachi.required'=>'Vui lòng nhập địa chỉ của bạn',
                'phone.required'=>'Vui lòng nhập số điện thoại của bạn để chúng tôi dễ check hàng',
                'phone.numeric'=>'Số điện thoại không được chứa kí tự khác ngoài số'
	    ]);

	    $user = new User;
	    $user->name = $request->name;
	    $user->fullname = str_slug($request->name,' ');
        $user->sex = $request->rdoSex;
	    $user->email = $request->email;
        $user->diachi = $request->diachi;
        $user->phone = $request->phone;
        $user->avatar = $request->avatar;
        $user->password = bcrypt($request->password);
        $user->role = $request->rdoTrangThai;
        if($request->hasFile('avatar')){
            $file = $request-> file('avatar');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/user/them')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            // $file = $request->file('sanpham');
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists("upload/avatar/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/avatar",$hinh);
            $user->avatar = $hinh;
        }else{
            $user->avatar = "";
        }

	    $user->save();

	    return redirect('admin/user/them')->with('thongbao','Thêm user thành công ');
    }

    public function getSua($id){
    	$user = User::find($id);
    	return view('admin/user/sua',['user'=>$user]);
    }

    public function postSua(Request $request,$id){
        // return $request;
    	$user=User::find($id);
    	$this->validate($request,[
    			'name'=>'required|min:3|max:100',
                'password'=>'required|min:3|max:32',
                'passwordAgain'=>'required|same:password',
                'diachi'=>'required',
                'phone'=>'required|numeric'
            ],
            [
                'name.required'=>'Bạn chưa nhập họ tên',
                'name.min'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
                'name.max'=>'Tên phải có độ dài từ 3 đến 32 kí tự',
                'password.min'=>'Mật khẩu phải có độ dài từ 3 kí tự',
                'password.max'=>'Mật khẩu chỉ có tối đa 32 kí tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu không khớp',
                'diachi.required'=>'Vui lòng nhập địa chỉ của bạn',
                'phone.required'=>'Vui lòng nhập số điện thoại của bạn để chúng tôi dễ check hàng',
                'phone.numeric'=>'Số điện thoại không được chứa kí tự khác ngoài số'
            ]);

    	$user->name = $request->name;
        $user->email = $request->email;
        $user->fullname = str_slug($request->name,' ');
        $user->sex = $request->rdoSex;
        $user->password = bcrypt($request->password);
        $user->role = $request->rdoTrangThai;
        $user->diachi = $request->diachi;
        $user->phone = $request->phone;
        if($request->hasFile('avatar')){ 
            $file = $request-> file('avatar');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/user/them')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            // $file = $request->file('sanpham');
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists("upload/avatar/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/avatar",$hinh);
            // unlink("upload/sanpham/".$sanpham->hinhanh);
            $user->avatar = $hinh;
        }

        $user->save();

    	return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    // public function getXoa($id){
    // 	$user = User::find($id);

    // 	$user->trangthai = 0;
    // 	$theloai->save();

    // 	return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa thành công');
    // }
    
    public function getXoa($id){
    	$user = User::find($id);
    	
    	$user->delete();

    	return redirect('admin/user/danhsach')->with('thongbao','Xóa người dùng thành công');
    }

    public function getDangNhapAdmin(){
        return view('admin.login');
    }

    public function postDangNhapAdmin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập Password',
            'password.min'=>'Password không được nhỏ hơn 3 kí tự',
            'password.max'=>'Passwordư không được quá 32 kí tự'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->isAdmin()) {
                return redirect()->route('trang-chu')->with('thongbao','Bạn đã đăng nhập thành công với tư cách quản trị viên');
            } else {
                return redirect()->route('trang-chu')->with('thongbao', 'Đăng nhập thành công');
            } 

            }else {
                Auth::logout();
                return back()->with('thongbao', 'Tên tài khoản hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại');
            }
    }

    // public function isAdmin(){
    //     return $this->role == 1 || $this->role == 2|| $this->role == 0;
    // }

    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect()->route('trang-chu')->with('thongbao','Bạn đã đăng xuất!');
    }
}
