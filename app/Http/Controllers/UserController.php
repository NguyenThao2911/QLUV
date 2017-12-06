<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
use App\User;
use Hash;

class UserController extends Controller
{
    public function getLogin(){
    	return view('page.login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'username'=>'required',
                'password'=>'required'
            ],
            [
                'username.required'=>'Vui lòng nhập email',
                'password.required'=>'Vui lòng nhập password'
            ]);
        $credentials= array('username'=>$req->username, 'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect()->route('trangchu')->with(['flag'=>'success', 'message'=>'Xin chào']);
        }else{
            return redirect()->back()->with(['flag'=>'unsuccess', 'message'=>'Sai thông tin đăng nhập']);
        }
    }

    public function getTrangchu(){
    	return view('page.trangchu');
    }

    public function postLogout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function getListUser(){
    	$objUser = new User();
    	$listUsers = $objUser->all()->toArray();
    	return view('page.listUser')->with('listUsers', $listUsers);
    }

    public function getAddUser(){
        return view('page.addUser');
    }

    public function postAddUser(Request $request){
        
        $this->validate($request,
                [
                    'username'=>'required|unique:users',
                    'email'=>'required|unique:users'
                ],
                [
                    'username.required'=>'Vui lòng nhập thêm username',
                    'username.unique'=>'Username đã tồn tại',
                    'email.required'=>'Vui lòng nhập thêm email',
                    'email.unique'=>'Email đã có người dùng'
                ]);
        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->sex = $request->sex;
        $user->is_admin = $request->role;
        $user->save();
        return redirect()->route('list.user')->with(['flash_level'=>'success', 'flash_message'=>'Thêm user thành công']);
    }

    public function getEditUser($id){
        $data = User::find($id);
        return view('page.editUser', compact('data','id'));
    }

    public function updateUser($id, Request $request){
        $user = User::find($id);
        if($request->input('password')){
            $this->validate($request,
                [
                    'repassword'=>'same:password'
                ],
                [
                    'repassword.same'=>'Vui lòng nhập lại đúng mật khẩu'
                ]);
            $pass = $request->input('password');
            $user->password = Hash::make($pass);
        }

        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->sex = $request->sex;
        $user->is_admin = $request->role;
        $user->remember_token = $request->input('_token');
        $user->save();
        return redirect()->route('list.user')->with(['flash_level'=>'success', 'flash_message'=>'Cập nhật user thành công']);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete($id);
        return redirect()->route('list.user')->with(['flash_level'=>'success', 'flash_message'=>'Xóa user thành công']);
    }
   
}
